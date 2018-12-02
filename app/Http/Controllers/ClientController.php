<?php

namespace App\Http\Controllers;

use App\metier\CatArticle;
use Request;
use App\metier\Client;
use App\metier\MonException;

class ClientController extends Controller {
    
    /**
     * Authentifie le visiteur
     * @return type Vue formLogin ou home
     */
    public function login() {
        $login = Request::input('login');
        $pwd = Request::input('pwd');        
        $unClient = new Client();
        $connected = $unClient->signIn($login, $pwd);
        $mesCatArt = new CatArticle();
        $mesCatArt = $mesCatArt->getListeCategories();
        if ($connected){
            return view('home', compact('mesCatArt'));
        }
        else{
            $erreur = "Login ou mot de passe inconnu !";
            return view('formLogin', compact('erreur'));
        }
    }
    
    /**
     * Déconnecte le visiteur authentifié
     * @return type Vue home
     */
    public function logout(){
        $unClient = new Client();
        $unClient->logout();
        return view('home');
    }
    
    /**
     * Initialise le formulaire d'authentification
     * @return type Vue formLogin
     */
    public function getLogin() {
        $erreur = "";
        return view ('formLogin', compact('erreur'));
    }
}

