<?php

//Interface 
//Abstract

//--------------
//inheritance
//scope of variables
//access modifier


abstract class Shape {
    abstract public function getArea(); // Abstract method
    public function getColor() {
        return "No color specified.";
    }
}


class Circle extends Shape {
   

    public function getArea() {
        return "This is abstract method";
    }
}

$object=new circle ();
$object->ge
