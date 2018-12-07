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
    public function create() {
        $login = Request::input('login');
        $pwd = Request::input('pwd');
        $tel = Request::input('tel');
        $cp = Request::input('cp');
        $ville = Request::input('ville');
        $nom = Request::input('nom');
        $prenom = Request::input('prenom');
        $adresse = Request::input('adresse');

        $unClient = new Client();
        $create = $unClient->createCli($login, $pwd, $tel, $cp, $ville, $adresse, $prenom, $nom);

        if ($create){
            $success='La création à réussi';
            return view('formAccount', compact('success'));

        }
        else{
            $erreur = "La création à échoué";
            return view('formAccount', compact('erreur'));
        }
    }
    
    /**
     * Déconnecte le visiteur authentifié
     * @return type Vue home
     */
    public function logout(){
        $unClient = new Client();
        $unClient->logout();
        $mesCatArt = new CatArticle();
        $mesCatArt = $mesCatArt->getListeCategories();
        if(isset($_SESSION['cart']))
            $_SESSION['cart'] = null;
        return view('home',compact('mesCatArt'));
    }

    public function getUnClient(){
        try{
            $unClient = new Client();
            $unClient = $unClient->getById();
            $title = 'Modifier les informations du compte';
            return view('formAccount', compact('unClient','title'));
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }

    public function modifCli(){
        try{
            $login = Request::input('login');
            $pwd = Request::input('pwd');
            $tel = Request::input('tel');
            $cp = Request::input('cp');
            $ville = Request::input('ville');
            $nom = Request::input('nom');
            $prenom = Request::input('prenom');
            $adresse = Request::input('adresse');
            $unClient = new Client();
            $update = $unClient->updateCli($login, $pwd, $tel, $cp, $ville, $adresse, $prenom, $nom);
            $unClient = $unClient->getById();
            $title = 'Modifier les informations du compte';
            if ($update){
                $success='La modification à réussi';
                return view('formAccount', compact('success','title','unClient'));

            }
            else{
                $erreur = "La modification à échoué";
                return view('formAccount', compact('erreur','title','unClient'));
            }
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }

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

