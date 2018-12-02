<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 01/12/2018
 * Time: 18:22
 */

namespace App\metier;
use Illuminate\Support\Facades\Session;
use DB;

class Panier
{
    public $items=null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public $imgPaths=null;
//    public $updateQty=0;
//  old cart in cart Page
    public function __construct($oldCart){
        if ($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice=$oldCart->totalPrice;
            $this->imgPaths=$oldCart->imgPaths;

        }
    }

    public function add($item, $id){
        $storedItem=['qty'=>0,'price'=> $item->price,'item'=>$item,'img'=>$item->imagePath];
        if ($this->items){
            if (array_key_exists($id,$this->items)){
                $storedItem = $this->items[$id];
//          $storedItem= $this->items[$img];
            }
        }
        $storedItem['qty']++;
        $storedItem['price']= $item->price * $storedItem['qty'];
        $storedItem['img']=$item->imagePath;
        $this->items[$id]=$storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;

        $this->imgPaths=$item->imagePath;
    }

//  public function reduceByOne($id){
//      $this->items[$id]['qty']--;
//      $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
//     $this->totalQty--;
//    $this->totalPrice -= $this->items[$id]['item']['price'];
//
//    //if zero then unset
//    if($this->items[$id]['qty'] <=0){
//        unset($this->items[$id]);
//       // $this->totalPrice=0;
//    }
//  }

    //remove all item
    public function removeItem($id)
    {
        $this->totalQty-=$this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['item']['price']  * $this->items[$id]['qty'];
        unset($this->items[$id]);
//        $this->totalPrice=0;
    }

    public  function updateQty($id,$qty){

//      clear up the previous pricetotal of item //reset

        $this->totalPrice -= $this->items[$id]['item']['price'] * $this->items[$id]['qty'] ;
//        $this->items[$id]['price'] -= $this->items[$id]['item']['price']  * $this->items[$id]['qty'] ;
//      clear up the previous totalQTY of item //reset
        $this->totalQty -= $this->items[$id]['qty'];
        //asign the qty in storedQty/Oldcart
        $this->items[$id]['qty'] = $qty;
        //add to the total Qty
        $this->totalQty +=  $this->items[$id]['qty'];


//        $this->items[$id]['price']=
//        Add the price in total price overall

        $this->totalPrice += $this->items[$id]['item']['price'] * $this->items[$id]['qty'];


        //if zero then unset
        if($this->items[$id]['qty'] <=0){
            unset($this->items[$id]);
            // $this->totalPrice=0;
        }


    }
}