<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 01/12/2018
 * Time: 10:18
 */

namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\metier\MonException;

class ArticleAndCat extends Model
{
    protected $table = 'ARTICLEANDCAT';
    public $timestamps = false;

    protected $fillable = [
        'NUMART',
        'CODECAT_ART',
        'NOMART',
        'PRIXART',
        'DESCART',
        'IMGART',
        'LIBELLECAT_ART',
        'DESCCAT_ART'
    ];

    public function getAllArticleAndCat()
    {
        try {
            $mesArticlesAndCat = DB::table('ARTICLEANDCAT')
                ->get();
            return $mesArticlesAndCat;
        } catch (QueryException $e) {
            $e->getMessage();
        }
    }

    public function getArticleAndCatByCodeCat($CoceCat)
    {
        try {
            $mesArticlesAndCatByCode = DB::table('ARTICLEANDCAT')
                ->Select()
                ->where('CODECAT_ART', $CoceCat)
                ->get();
            return $mesArticlesAndCatByCode;
        } catch (QueryException $e) {
            $e->getMessage();
        }
    }


    public function getByNumart($NUMART)
    {
        try {
            $mesArticlesAndCatByCode = DB::table('ARTICLEANDCAT')
                ->Select()
                ->where('NUMART', $NUMART)
                ->first();
            return $mesArticlesAndCatByCode;
        } catch (QueryException $e) {
            $e->getMessage();
        }
    }

}
