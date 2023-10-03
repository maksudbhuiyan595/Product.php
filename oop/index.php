<?php


class AccessModifierClass{
 protected $name= "access";
 private $age= 19;
 public $batch=191;

}
class A extends AccessModifierClass{

    function check(){
        echo $this->name.PHP_EOL;
        // echo $this->age;
        echo $this->batch;
    }
}
$object= new A();
echo $object->check();

?>