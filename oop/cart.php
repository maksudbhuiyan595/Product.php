<?php

class Cart{
    public $price;
    public $qty;
    public $discount;

    public function addToCart(){
        return $this->price*$this->qty-$this->discount;
    }
}
$object=new Cart();
$object->price=500;
$object->qty=2;
$object->discount=100;
// print_r($object);
echo $object->addToCart();


?>


 