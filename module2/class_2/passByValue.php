<?php

// pass by value and references
$name="Maksud";
function myName(&$name){
    $name="new name";
}

myName($name);//pass by value
echo $name;



?>