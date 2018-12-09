<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 03/12/2018
 * Time: 16:19
 */

namespace App\Http\Controllers;

use Request;
use App\metier\Commande;
use App\metier\MonException;
use App\metier\Lig_cmd;
use App\metier\Cmdwithart;

class CommandeController extends Controller {

    public function passerCmd($PRIXPANIER) {
        try{
            $prix = 'Passe commande pour un montant de ' . $PRIXPANIER . '.00 €';
            return view('formCommande', compact('prix','PRIXPANIER'));
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }

    public function validerCmd(){
        try{
            $prix = Request::input('prixCmd');
            $cb =  Request::input('cb');
            $uneCmd = new Commande();
            $numCmd = $uneCmd->addCmd($cb,$prix);
            if (!is_null($numCmd)){
                $uneLigCmd = new Lig_cmd();
                $work = $uneLigCmd->addLigCmd($numCmd);
                if($work){
                    $success='Votre commande à bien été enregistrée';
                    $title = 'Historique de vos commandes';
                    $mesCmd = new Cmdwithart();
                    $mesCmd = $mesCmd->getCmdByNumCli();
                    $title = 'Historique de vos commandes';
                    $_SESSION['cart'] = null;
                    return view('listerCmd', compact('success','title','mesCmd'));
                }
                else{
                    $erreur = "Erreur lors du passage de votre commande";
                    return view('listerPanier', compact('erreur'));
                }
            }
            else{
                $erreur = "Erreur lors du passage de votre commande 1";
                return view('listerPanier', compact('erreur'));
            }
        }
        catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }
}