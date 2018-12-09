<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 03/12/2018
 * Time: 16:20
 */

namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\metier\MonException;
use Illuminate\Support\Facades\Session;

class Commande extends Model
{
    protected $table = 'commande';
    protected $fillable = [
        'NUMCMD',
        'NUMCLI',
        'DATECMD',
        'DATEPREVUARRIVE',
        'CBCMD',
        'PRIXCMD'
    ];
    public $timestamps = false;

    public function addCmd($cb,$prix){
        $id = null;
        try {
            $lastId = DB::table('COMMANDE')
                ->select('NUMCMD')
                ->orderBy('NUMCMD','desc')
                ->first();
            $id = $lastId->NUMCMD + 1;
            DB::table('COMMANDE')->insert(
                [
                    'NUMCMD'=>$id,'NUMCLI'=> Session::get('id'),
                    'DATECMD' => date("Y-m-d"), 'DATEPREVUARRIVE' => date('y:m:d', strtotime("+14 days")),
                    'CBCMD' => $cb,'PRIXCMD' => $prix]
            );
        } catch (QueryException $e) {
            $e->getMessage();
        }
        return $id;
    }
}