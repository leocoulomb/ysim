<?php

namespace App\Http\Controllers;

use App\metier\MonException;
use Request;
use Illuminate\Support\Facades\Session;
use App\metier\Boutique;
use Exception;

class BoutiqueController extends Controller {

    /**
     * Affiche la liste de toutes les boutiques
     * @return type Vue listeBoutique
     */

    public function listerBoutique()
    {
        $uneBoutique = new Boutique();

        try{
            $mesBoutiques = $uneBoutique->getListeBoutiques();
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }

        return view('vues/listerBoutique', compact('mesBoutiques'));

    }

}
