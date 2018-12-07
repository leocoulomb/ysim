<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 01/12/2018
 * Time: 09:58
 */

namespace App\metier;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\metier\MonException;

class Article extends Model
{
    protected $table = 'ARTICLE';
    protected $primaryKey = 'NUMART';
    public $timestamps = false;

    protected $fillable = [
        'NUMART',
        'CODECAT_ART',
        'NOMART',
        'PRIXART',
        'DESCART',
        'IMGART',
        'QTESTOCK',
        'PRIXLIVRAISON'
    ];

    //SELECT * FROM ARTICLE
    public function getListeArticles() {
        try{
            $mesArticles = DB::table('ARTICLE')
                ->get();
            return $mesArticles;
        } catch (QueryException $e) {
            $e->getMessage();
        }
    }
    public function getByNumart($NUMART)
    {
        try {
            $mesArticlesById = DB::table('ARTICLE')
                ->Select()
                ->where('NUMART', $NUMART)
                ->first();
            return $mesArticlesById;
        } catch (QueryException $e) {
            $e->getMessage();
        }
    }
}