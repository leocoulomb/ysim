<?php

//Accueil
Route::get('/', 'CatArticleController@listeCategories');
Route::get('/home', 'CatArticleController@listeCategories');

Route::get('/', 'ArticleController@listerArticle');
Route::get('/home', 'ArticleController@listerArticle');

//Accès boutique spécifique
Route::get('/boutique/{id}', 'BoutiqueController@accesBoutique');

//Lister boutiques
Route::get('/listerBoutique', 'BoutiqueController@listerBoutique');
