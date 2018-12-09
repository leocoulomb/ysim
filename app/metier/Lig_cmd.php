<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 02/12/2018
 * Time: 16:16
 */

namespace App\metier;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\QueryException;
session_start();
class Lig_cmd extends Model
{
    //On déclare la table lig_cmd
    protected $table = 'lign_cmd';
    public $timestamps = false;
    protected $fillable = [
        'NUMCLI',
        'NUMART',
        'DATECMD',
        'QTECMD',
        'DATEPREVUARRIVE',
        'CBCMD'
    ];

    public function addLigCmd($numCmd){
        $add = false;
        try{
            foreach($_SESSION['cart'] as $Cart){
                DB::table('lig_cmd')->insert(
                    [
                        'NUMCMD'=>$numCmd,'NUMART'=> $Cart['id'],
                        'QTECMD' => $Cart['qte']]
                );
            }
            $add = true;
        }catch (QueryException $e) {
            $e->getMessage();
        }
        return $add;

    }



}