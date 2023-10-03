<?php
//anonymous funciton 

/* (function(){
    $num=10;
    $num2=20;
    echo $num+$num2;
})()
 */

 //regular function

/*  $jack=function($x){
    echo $x;
 };

 $jack(10); */

 //Aro function
 $jack=fn($x,$y)=>$x+$y;
 echo $jack(10,30);

?>