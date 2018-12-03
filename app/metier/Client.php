<?php

namespace App\metier;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
                Session::put('nomcli', $client->NOMCLI);
                Session::put('prenomcli', $client->PRENOMCLI);
                $connected = true;
            }
        }
        return $connected;
    }

    public function createCli($login, $pwd, $tel, $cp, $ville, $adresse, $prenom, $nom) {
        $create = false;
        try {
            $lastId = DB::table('CLIENT')
                ->select('NUMCLI')
                ->orderBy('NUMCLI','desc')
                ->first();
            $id = $lastId->NUMCLI;
            $id+=1;
            DB::table('client')->insert(
                [
                    'NUMCLI'=> $id,
                    'NOMCLI' => $nom, 'PRENOMCLI' => $prenom, 'ADRESSECLI' => $adresse,
                    'VILLECLI' => $ville,'CPCLI' => $cp,'TELCLI' => $tel,
                    'LOGINCLI' => $login,'PWDCLI' => $pwd]
            );
            $create = true;
        } catch (QueryException $e) {
            $e->getMessage();
        }
        return $create;
    }
    /**
     * Délogue le visiteur en mettant son Id à 0
     * dans la session => le menu n'est plus accessible
     */
    public function logout(){
        Session::put('id', 0);
    }

    public function getById(){
        try{
            $client = DB::table('client')
                ->select()
                ->where('NUMCLI', '=', Session::get('id'))
                ->first();
        } catch (QueryException $e){
            return $e->getMessage();
        }
        return $client;
    }

    public function updateCli($login, $pwd, $tel, $cp, $ville, $adresse, $prenom, $nom) {
        $update = false;
        try {
            DB::table('CLIENT')
                ->where('NUMCLI', Session::get('id'))
                ->update([
                    'LOGINCLI' => $login,
                    'PWDCLI' => $pwd,
                    'TELCLI' => $tel,
                    'CPCLI' => $cp,
                    'VILLECLI' => $ville,
                    'ADRESSECLI' => $adresse,
                    'PRENOMCLI' => $prenom,
                    'NOMCLI' => $nom
                ]);
        } catch (QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
        $update = true;
        return $update;
    }
}
?>

