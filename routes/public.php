<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('page.contact.index');
});

Route::post('contacForm', 'Contact\ContactMailController@sendContact');

Route::group(['middleware' => ['web']], function () {

    Route::get('/home', 'HomeController@index');

    Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return redirect('/home');
    })->where([
        'lang' => 'en|es'
    ]);

});

Auth::routes();


