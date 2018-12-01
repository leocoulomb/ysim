<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 01/12/2018
 * Time: 10:17
 */

namespace App\Http\Controllers;

use App\metier\ArticleAndCat;
use App\metier\MonException;
use Request;
use Illuminate\Support\Facades\Session;
use Exception;

class ArticleAndCatController extends Controller
{
    public function listerArticleAndCat(){
        try{
            $mesArticlesAndCat = new ArticleAndCat();
            $mesArticlesAndCat = $mesArticlesAndCat->getAllArticleAndCat();
            $title = 'Liste de tous les articles';
            return view('listerArticle', compact('mesArticlesAndCat','title'));
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }
    public function listerArticleByCat($CODECAT_ART)
    {
        try {
            $unArticleAndCat = new ArticleAndCat();
            $mesArticlesAndCatByCode = $unArticleAndCat->getArticleAndCatByCodeCat($CODECAT_ART);
            $title = 'Liste des articles de la catégiorie ' . $mesArticlesAndCatByCode[0]->LIBELLECAT_ART;
            return view('listerArticle', compact('mesArticlesAndCatByCode','title'));
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }
    public function listerArticleByBout($NUMBOUT){
        try {
            $unArticleAndCat = new ArticleAndCat();
            $mesArticlesAndCatByBout = $unArticleAndCat->getArticleAndCatByBout($NUMBOUT);
            $title = 'Liste des articles de la boutique ' .$mesArticlesAndCatByBout[0]->RESBOUT;
            return view('listerArticle', compact('mesArticlesAndCatByBout','title'));
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }
}