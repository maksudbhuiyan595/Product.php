<?php 
/* $color=['a'=>'red','b'=> 'green', 'c'=>'blue','d'=> 'yellow', 'e'=>'pink'];
$random=['a'=>'red','two'=> 'green', 'tree'=>'red','four'=> 'orenage', 'five'=>'pink'];

$newArray= array_intersect_key($color,$random);
echo "</pre>";
print_r($newArray); */


// array_intersect_assos

/* $color=['a'=>'red','b'=> 'red', 'c'=>'blue','d'=> 'yellow', 'e'=>'pink'];
$random=['a'=>'red','b'=> 'red', 'tree'=>'red','four'=> 'orenage', 'five'=>'pink'];

$newArray= array_intersect_assoc($color,$random);
echo "</pre>";
print_r($newArray);  */


//array_interset_uassos
function compare($color,$random){
    if ($color===$random){
        return 0;
    }else{
        return $color>$random? 1 : -1;
    }
}

$color=['a3'=>'red','b'=> 'green', 'c'=>'blue','d'=> 'yellow', 'e'=>'pink'];
$random=['a'=>'red','two'=> 'green', 'tree'=>'red','four'=> 'orenage'];

$newArray= array_intersect_uassoc($color,$random,'compare');

print_r($newArray); 


?>