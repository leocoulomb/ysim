<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 26/11/2018
 * Time: 18:25
 */

namespace App\Http\Controllers;
session_start();
use App\metier\Article;
use App\metier\Panier;
use Exception;
use App\metier\MonException;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    public function listerArticle()
    {
        try {
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

    public function listerPanier()
    {
        try {
            $title = 'Liste des articles du panier';
            return view('listerArticle', compact('title'));
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }

    public function addToCart($NUMART){
        try{
            $unArticle = new Article();
            $unArticle = $unArticle->getByNumart($NUMART);
            if(isset($_SESSION['cart'])){
                $item_array_id = array_column($_SESSION['cart'],'id');
                if(!in_array($unArticle->NUMART, $item_array_id)){
                    $count = count($_SESSION['cart']);
                    $item = array(
                        'id' => $unArticle->NUMART,
                        'qte' => 1,
                        'name' => $unArticle->NOMART,
                        'desc' => $unArticle->DESCART,
                        'img' => $unArticle->IMGART,
                        'deliveryPrice' => $unArticle->PRIXLIVRAISON,
                        'price' => $unArticle->PRIXART
                    );
                    $_SESSION['cart'][$count] = $item;
                }
            }
            else{
                $item = array(
                    'id' => $unArticle->NUMART,
                    'qte' => 1,
                    'name' => $unArticle->NOMART,
                    'desc' => $unArticle->DESCART,
                    'img' => $unArticle->IMGART,
                    'deliveryPrice' => $unArticle->PRIXLIVRAISON,
                    'price' => $unArticle->PRIXART
                );
                $_SESSION['cart'][0] = $item;
            }
            $title = 'Liste des articles du panier';
            return view('listerPanier', compact('unArticle','title'));
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }
}