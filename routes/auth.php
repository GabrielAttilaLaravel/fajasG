<?php



Route::group(['middleware' => ['web']], function () {

    Route::get('/home', 'HomeController@index');

    Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return redirect('/home');
    })->where([
        'lang' => 'en|es'
    ]);

});