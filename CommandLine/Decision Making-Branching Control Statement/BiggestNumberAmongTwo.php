<?php
//Write a php program to read two integer numbers fronm user and 
//You have to printbiggest among them.

//num1 and num2 are two integer input.
$num1 = readline("Enter 1st number: ");
$num2 = readline("Enter 2nd number: ");

$big = $num1;

if($num2 > $big){

    $big = $num2;
}

echo "Bigger number is $big" ."\n";

/* 

if($num1 > $num2){
    echo "$num1 is bigger" ."\n";
}
else{
    echo "$num2 is bigger" ."\n";
}
    
*/








