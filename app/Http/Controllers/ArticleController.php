<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 26/11/2018
 * Time: 18:25
 */

namespace App\Http\Controllers;

use App\metier\Article;
use App\metier\Panier;
use Exception;
use App\metier\MonException;

class ArticleController extends Controller
{
    public function listerArticle(){
        try{
            $mesArticles = new Article();
            $mesArticles = $mesArticles->getListeArticles();
            return view('listerArticle', compact('mesArticles'));

        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }
    public function Cart(){
        new Panier(null);
    }
    public function listerPanier(){
        try{
            $mesArticles = new Article();
            $mesArticles = $mesArticles->getListeArticles();
            $title = 'Liste des articles du panier';
            return view('listerArticle', compact('mesArticles','title'));

        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }
}