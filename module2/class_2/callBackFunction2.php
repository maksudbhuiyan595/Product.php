<?php
//callback function

function add($n,$m){
    echo "adding $n and $m";
}
function divide(){
    echo "divide";
}

function CallBackFunction($a,$b,$process){
    if(is_callable($process)){
        $process($a,$b);

    }else{
        echo"sorry, is not callable function ";
    }
}

echo CallBackFunction(10,30,"Maksud");


?>