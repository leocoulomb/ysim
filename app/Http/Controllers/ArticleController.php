<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 26/11/2018
 * Time: 18:25
 */

namespace App\Http\Controllers;

use App\metier\Article;
use App\metier\MonException;
use Request;
use Illuminate\Support\Facades\Session;
use App\metier\Boutique;
use Exception;

class ArticleController extends Controller
{
    public function listerArticle(){
        try{
            $mesArticles = new Article();
            $mesArticles->getListeArticles();
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }
}