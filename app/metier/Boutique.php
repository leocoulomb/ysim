<?php

namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use DB;

class Boutique extends Model {

    //On déclare la table Boutique

    protected $table = 'boutique';
    protected $primaryKey = 'numBout';
    public $timestamps = false;

    private $rseBout;
    private $adresseBout;
    private $villeBout;
    private $cpBout;
    private $emailBout;
    private $telBout;

    protected $fillable = [
        'numBout',
        'rseBout',
        'adresseBout',
        'villeBout',
        'cpBout',
        'emailBout',
        'telBout'
    ];

    public function __construct()
    {

    }

    public function getRaisonSociale()
    {
        return $this->rseBout;
    }

    public function getAdresse()
    {
        return $this->adresseBout;
    }

    public function getVille()
    {
        return $this->villeBout;
    }

    public function getCodePostal()
    {
        return $this->cpBout;
    }

    public function getEmail()
    {
        return $this->emailBout;
    }

    public function getTelephone()
    {
        return $this->telBout;
    }

    public function getListeBoutiques() {
        try {
            $mesBoutiques = DB::table('Boutique')
                ->Select()
                ->get();
                return $mesBoutiques;
        } catch (\Illuminate\Database\QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }
}
?>
