<?php

//conversion using settype function
//string to integer
//implicit
$a="100";//string
$a_converted=settype($a,"integer");

echo $a_converted;

//Explicit conversion
$b="200.5";
$b_converted=(integer)$b;

echo $b_converted;

$age=21.6;

echo " Is my name and ".$age;





?>
