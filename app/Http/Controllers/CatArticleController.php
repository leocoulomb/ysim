<?php
/**
 * Created by PhpStorm.
 * User: lcoul
 * Date: 19/11/2018
 * Time: 15:27
 */

namespace App\Http\Controllers;

use App\metier\CatArticle;
use App\Exceptions\MonException;

class CatArticleController extends Controller
{
    public function listeCategories(){
        try{
            $uneCatArt = new CatArticle();
            $mesCatArt = $uneCatArt->getListeCategories();
            return view('home', compact('mesCatArt'));

        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }
}