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

class CommandeController extends Controller {

    public function addCmd() {
        try{
            $uneCmd = new Cmdwithart();
            $mesCmd = $mesCmd->getCmdByNumCli();
            $title = 'Historique de vos commandes';
            return view('listerCmd', compact('mesCmd','title'));
        } catch (MonException $e) {
            $erreur = $e->getMessage();
            return view('Error', compact('erreur'));
        } catch (Exception $ex) {
            $erreur = $ex->getMessage();
            return view('Error', compact('erreur'));
        }
    }
}