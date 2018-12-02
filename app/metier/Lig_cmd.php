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



}