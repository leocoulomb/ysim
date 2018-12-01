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
            return view('listerArticle', compact('mesArticlesAndCat'));
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }
}