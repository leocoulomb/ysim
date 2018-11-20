<?php

//Accueil
Route::get('/', 'CatArticleController@listeCategories');
Route::get('/home', 'CatArticleController@listeCategories');

//Accès boutique spécifique
Route::get('/boutique/{id}', 'BoutiqueController@accesBoutique');

//Lister boutiques
Route::get('/listerBoutique', 'BoutiqueController@listerBoutique');
