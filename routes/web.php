<?php


Route::get('/', function () {
    return view('home');
});

/**Lister les boutiques*/
Route::get('listerBoutique', 'BoutiqueController@listerBoutique');
