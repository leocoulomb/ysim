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
            return view('error', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('error', compact('monErreur'));
        }

        return view('listerBoutique', compact('mesBoutiques'));

    }

    public function accesBoutique($id)
    {
        $uneBoutique = new Boutique();
        try {
            $mesBoutiques = $uneBoutique->getById($id);
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('error', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('error', compact('monErreur'));
        }
        return view('boutique', compact('mesBoutiques'));
    }

}
