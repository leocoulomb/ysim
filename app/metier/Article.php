<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 26/11/2018
 * Time: 18:26
 */

namespace App\metier;

use Illuminate\Database\Eloquent\Model;
use DB;

class Article extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'NUMART';
    public $timestamps = false;

    private $NUMART;
    private $CODE_ART;
    private $NOMART;
    private $PRIXART;
    private $DESCART;
    private $IMGART;

    protected $fillable = [
        'NUMART',
        'CODECAT_ART',
        'NOMART',
        'PRIXART',
        'DESCART',
        'IMGART'
    ];

    public function __construct()
    {

    }
    public function getListeArticles(){
        try {
            $mesArticles = DB::table('article')
                ->Select()
                ->get();
            return $mesArticles;
        } catch (\Illuminate\Database\QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }
}