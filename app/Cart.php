<?php

namespace App;


class Cart
{
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0.0;
    public function _construct($oldCart)
    {
        if( $oldCart){
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQty = $oldCart->totalQty;
        }
    }

    public function add($item , $id)
    {
        $storeItem = ['qty' => 0 , 'price' => $item->price , 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storeItem = $this->items[$id];
            }
        }
        $storeItem['qty']++;
        $storeItem['price'] = $item->price * $storeItem['qty'];
        $this->item[$id]= $storeItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }
}
