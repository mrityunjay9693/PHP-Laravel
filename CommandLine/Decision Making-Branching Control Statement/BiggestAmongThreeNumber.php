<?php
//Write a php program to read three integer from user and 
//Print biggest among these three number by using simple if-statement 

$num1 = readline("Enter 1st number: ");
$num2 = readline("Enter 2nd number: ");
$num3 = readline("Enter 3rd number: ");

$big = $num1;

if($num2 > $big){
    $big = $num2;
}

if($num3 > $big){
    $big = $num3;   
}

echo "Biggest number among $num1, $num2, $num3 is :  " .$big ."\n";