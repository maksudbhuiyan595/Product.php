<?php
$str = "The rain in SPAIN falls8758269862896 mainly on the plains.|kdfjakfoiwe0in";
$pattern = "/[^0-9]/i";
$ex=preg_match_all($pattern, $str, $array); 


print_r($array);

?>