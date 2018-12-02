<?php

namespace App\metier;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class Client extends Model {

    //On déclare la table client
    protected $table = 'client';
    public $timestamps = false;
    protected $fillable = [
        'numCli',
        'nomCli',
        'prenomCli',
        'emailCli',
        'adresseCli',
        'villeCli',
        'cpCli',
        'telCli',
        'loginCli',
        'pwdCli'
    ];

   /**
    * Authentifie le visiteur sur son login et Mdp
    * Si c'est OK, son id est enregistrer dans la session
    * Cela lui donne accès au menu général (voir page master)
    * @param type $login : Login du visiteur
    * @param type $pwd : MdP du visiteur
    * @return boolean : True or false
    */
    public function signIn($login, $pwd) {
        $connected = false;
        $client = DB::table('client')
                ->select()
                ->where('LOGINCLI', '=', $login)
                ->first();
        if ($client) {
            if ($client->PWDCLI == $pwd) {
                Session::put('id', $client->NUMCLI);
                $connected = true;
            }
        }
        return $connected;
    }

    /**
     * Délogue le visiteur en mettant son Id à 0
     * dans la session => le menu n'est plus accessible
     */
    public function logout(){
        Session::put('id', 0);
    }
}
?>

