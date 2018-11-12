<?php

namespace App\Http\Controllers;

use Request;
use App\metier\Client;

class ClientController extends Controller {
    
    /**
     * Authentifie le visiteur
     * @return type Vue formLogin ou home
     */
    public function login() {
        $login = Request::input('login');
        $pwd = Request::input('pwd');        
        $unClient = new Visiteur();
        $connected = $unClient->login($login, $pwd);
        if ($connected){
            return view('home');
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

