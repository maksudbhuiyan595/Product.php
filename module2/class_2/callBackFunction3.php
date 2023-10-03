<?php
//callback function

$numbers=[1,2,3,4.56,7,8,9];

function isEven($n){
    return $n%2==0;
}

$callBack=array_filter($numbers,"isEven");
print_r($callBack);

?>