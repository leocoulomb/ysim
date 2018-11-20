<?php

//Accueil
Route::get('/', 'CatArticleController@listeCategories');
Route::get('/home', 'CatArticleController@listeCategories');

//Accès boutique spécifique
Route::get('/boutique/{id}', 'BoutiqueController@modification');

//Lister boutiques
Route::get('listerBoutique', 'BoutiqueController@listerBoutique');
