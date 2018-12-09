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
use Exception;
use Request;
use App\metier\ArticleAndCat;
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
            return view('listerPanier', compact('title'));
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
            return view('listerPanier', compact('title'));
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }

    public function addQte($NUMART){
        try{
            for($i = 0; $i < count($_SESSION['cart']);$i++) {
                if($_SESSION['cart'][$i]['id'] == $NUMART)
                    $_SESSION['cart'][$i]['qte'] += 1;
            }
            $title = 'Liste des articles du panier';
            $success = 'Quantité ajouter avec succès';
            return view('listerPanier', compact('title','success'));
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }
    public function deleteQte($NUMART){
        try{
            for($i = 0; $i < count($_SESSION['cart']);$i++) {
                if($_SESSION['cart'][$i]['id'] == $NUMART){
                    if($_SESSION['cart'][$i]['qte'] == 1){
                        unset($_SESSION['cart'][$i]);
                        $_SESSION['cart'] = array_values($_SESSION['cart']);
                        $success = 'Article supprimé avec succès';
                    }
                    else{
                        $_SESSION['cart'][$i]['qte'] -= 1;
                        $success = 'Quantité supprimé avec succès';
                    }
                }
            }
            $title = 'Liste des articles du panier';
            return view('listerPanier', compact('title','success'));
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }

    public function supprimeArticle($NUMART) {
        $unArticle = new Article();
        try {
            $unArticle->deleteArticle($NUMART);
        } catch (Exception $ex) {
            Session::put('erreur', $ex->getMessage());
        } finally {
            return redirect('/listerArticle');
        }
    }

    public function updateArticle($NUMART) {
        try {
            $erreur = "";
            $unArticle = new Article();
            $unArticle = $unArticle->getByNumart($NUMART);
            $title = "Modification d'un article";
            return view('formArticle', compact('unArticle', 'title', 'erreur'));
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('error', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('error', compact('monErreur'));
        }
    }

    public function validateArticle() {
        try {
            $NUMART = Request::input('NUMART');
            $NOMART = Request::input('NOMART');
            $DESCART = Request::input('DESCART');
            $PRIXART = Request::input('PRIXART');
            $PRIXLIVRAISON = Request::input('PRIXLIVRAISON');
            $QTESTOCK = Request::input('QTESTOCK');

            $unArticle = new Article();
            if($NUMART > 0) {
                $unArticle->updateArticle($NUMART, $NOMART, $DESCART, $PRIXART, $PRIXLIVRAISON, $QTESTOCK);
            }
            else {
                $unArticle->insertArticle($NOMART,$DESCART, $PRIXART, $PRIXLIVRAISON, $QTESTOCK);
            }
            $mesArticlesAndCat = new ArticleAndCat();
            $mesArticlesAndCat = $mesArticlesAndCat->getAllArticleAndCat();
            $title = 'Liste de tous les articles';
            return view('listerArticle',compact('title','mesArticlesAndCat'));
        } catch(MonException $e) {
            $erreur = $e->getMessage();
            return view('error', compact('erreur'));
        } catch(Exception $e) {
            $erreur = $e->getMessage();
            return view('error', compact('erreur'));
        }
    }

    public function addArticle() {
        try {
            $erreur = "";
            $unArticle = new Article();
            $title = "Ajout d'un article";
            return view('formArticle', compact('unArticle', 'title', 'erreur'));
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('error', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('error', compact('monErreur'));
        }
    }
}