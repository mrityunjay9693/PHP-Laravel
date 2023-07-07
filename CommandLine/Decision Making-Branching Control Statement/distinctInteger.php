<?php

$num1 = readline("Enter 1st number: ");
$num2 = readline("Enter 2nd number: ");
$num3 = readline("Enter 3rd number: ");

if($num1 != $num2 && $num1 != $num3 && $num2 != $num3){
    echo "Middle value: $num2" ."\n";
}
else{
    echo "Please enter distinct values." ."\n";
}