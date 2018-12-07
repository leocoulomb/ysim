<?php

//Accueil
Route::get('/', 'CatArticleController@listeCategories');
Route::get('/home', 'CatArticleController@listeCategories');

//Login
Route::get('/getLogin', function () {
    return view('formLogin');
});
Route::post('/login','ClientController@login');
Route::get('/getLogout', 'ClientController@logout');

//Créer un compte
Route::get('/createAcc', function(){
    $title = 'Création de compte';
    return view('formAccount', compact('title'));
});

Route::post('/inscription', 'ClientController@create');

//Modifier les infos de son compte
Route::get('/monCompte', 'ClientController@getUnClient');

Route::post('/updateAcc', 'ClientController@modifCli');

//Historique des commandes
Route::get('/histoCmd','CmdwithartController@listerCmd');

//Liste les articles
Route::get('/listerArticle', 'ArticleAndCatController@listerArticleAndCat');

//Liste les articles d'un catégories
Route::get('/listerArticle/{CODECAT_ART}', 'ArticleAndCatController@listerArticleByCat');

//Lister le panier
Route::get('/listerPanier', 'ArticleController@listerPanier');

//Ajouter un article au panier
Route::get('/addCart/{NUMART}', 'ArticleController@addToCart');

//Afficher un article
Route::get('/formArticle/{NUMART}','ArticleAndCatController@getUnArticle');
