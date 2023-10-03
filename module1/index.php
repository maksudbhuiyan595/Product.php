<?php
// strick function

declare(strict_types=1);
function myName(int $age, string $city){
    echo "my age is $age and city in $city".PHP_EOL;
}

myName(7,'uttara');

//variadic funciton
//strik operator
function sum(...$numbers){

  echo $numbers[0].PHP_EOL;
  print array_sum($numbers).PHP_EOL;

}
sum(10,20,30,40);
