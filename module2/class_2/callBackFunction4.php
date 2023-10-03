<?php
//callback function
$pepole=[
    ["name"=>"maksud", "gender"=>"male"],
    ["name"=>"nusrat", "gender"=>"female"],
    ["name"=>"tanvir", "gender"=>"male"],
    ["name"=>"fatema", "gender"=>"female"],
    ["name"=>"fahad", "gender"=>"male"],
    ["name"=>"nohuad", "gender"=>"male"],
];
function isMale($male){
    if($male['gender']=='male'){
        return true;
    }
}
function isFemale($person){
    if($person['gender']=='female'){
        return true;
    }
}

$callBack= array_filter($pepole,"isFemale");
echo "<pre>";
print_r($callBack);
echo"</pre>";
?>