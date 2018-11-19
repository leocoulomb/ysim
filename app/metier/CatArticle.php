<?php
/**
 * Created by PhpStorm.
 * User: lcoul
 * Date: 19/11/2018
 * Time: 15:28
 */

namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use DB;

class CatArticle extends Model
{
    //On déclare la table Boutique

    protected $table = 'CAT_ARTICLE';
    protected $primaryKey = 'CODECAT_ART';
    public $timestamps = false;

    protected $fillable = [
        'CODECAT_ART',
        'LIBELLECAT_ART',
        'DESCCAT_ART'
    ];
    //SELECT * FROM CAT_ARTICLE
    public function getListeCategories() {
        try{
            $mesCategories = DB::table('CAT_ARTICLE')
            ->get();
            return $mesCategories;
        } catch (QueryException $e) {
            throw new MonException($e->getMessage());
        }
    }

}