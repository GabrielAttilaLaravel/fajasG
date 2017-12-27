<?php

namespace App\Http\Controllers\Contact;

use App\Mail\{ContactUser, ContactAdmin};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactMailController extends Controller
{

    public function show()
    {
        return view('page');
    }

    public function sendContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|max:50',
            'message' => 'required|string|min:6|max:500',
        ]);

        if ($validator->fails()) {
            return redirect('/contact')
                ->withErrors($validator)
                ->withInput();
        }
        // enviamos un email al usuario que se acaba de registrar
        Mail::to('gabrieljmorenot@gmail.com', 'Contacto')->send(new ContactAdmin($request));
        //Mail::to($request->email, 'GabrielAttila')->send(new ContactUser($request));
        //#contactsPage

        return back();
    }
}
