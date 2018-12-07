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

class Cmdwithart extends Model
{
    protected $table = 'cmdwithart';
    public $timestamps = false;

    protected $fillable = [
        'NUMART',
        'PRIXART',
        'NOMART',
        'IMGART',
        'PRIXLIVRAISON',
        'NUMCMD',
        'DATECMD',
        'DATEPREVUARRIVE',
        'QTECMD'
    ];

    public function getCmdByNumCli()
    {
        try {
            $mesCmd = DB::table('cmdwithart')
                ->Select()
                ->where('NUMCLI', '=', Session::get('id'))
                ->get();
            return $mesCmd;
        } catch (QueryException $e) {
            $e->getMessage();
        }
    }


}