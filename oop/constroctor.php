<?php

class Process{
   private $price=0;
   function Test(){
    echo $this->price;
   }
   
}
$object= new Process();
echo $object->Test();



?>