<?php

$arr=[

    ['name'=>'maksud','age'=>'23','city'=>'uttara'],
    ['name'=>'tanvir','age'=>'23','city'=>'uttara'],
    ['name'=>'fahad','age'=>'23','city'=>'uttara'],
    ['name'=>'Nohad','age'=>'23','city'=>'uttara']
];

foreach($arr as $arr1){
    foreach($arr1 as $key=>$item){
        echo $key.'=>'. $item.PHP_EOL;
    }
   
    echo "</br>";
}
?>