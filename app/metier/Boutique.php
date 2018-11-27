<?php

namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use DB;

class Boutique extends Model {

    //On déclare la table Boutique

    protected $table = 'boutique';
    protected $primaryKey = 'NUMBOUT';
    public $timestamps = false;

    private $rseBout;
    private $adresseBout;
    private $villeBout;
    private $cpBout;
    private $emailBout;
    private $telBout;

    protected $fillable = [
        'NUMBOUT',
        'RESBOUT',
        'ADRESSEBOUT',
        'VILLEBOUT',
        'CPBOUT',
        'EMAILBOUT',
        'TELBOUT'
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

    public function getById($id) {
        try {
            $mesBoutiques = DB::table('BOUTIQUE')
                ->Select()
                ->where('NUMBOUT',$id)
                ->first();
            return $mesBoutiques;
        } catch (\Illuminate\Database\QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }
}
?>
