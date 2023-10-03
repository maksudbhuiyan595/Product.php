<?php 

$color=['a'=>'red','b'=> 'green', 'c'=>'blue','d'=> 'yellow', 'e'=>'pink'];
$random=['one'=>'mango','two'=> 'green', 'tree'=>'red','four'=> 'orenage', 'five'=>'pink'];

$newArray= array_intersect($random,$color);
echo "</pre>";
print_r($newArray);


?>