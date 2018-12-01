<?php

//Accueil
Route::get('/', 'CatArticleController@listeCategories');
Route::get('/home', 'CatArticleController@listeCategories');

//Liste les articles
Route::get('/listerArticle', 'ArticleAndCatController@listerArticleAndCat');

//Liste les articles d'un catégories
Route::get('/listerArticle/{CODECAT_ART}', 'ArticleAndCatController@listerArticleByCat');

//Accès boutique spécifique
Route::get('/boutique/{id}', 'BoutiqueController@accesBoutique');

//Lister boutiques
Route::get('/listerBoutique', 'BoutiqueController@listerBoutique');
