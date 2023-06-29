<?php
//Program to take two integer number from user and perform 
//all arithmetic operation and print result.

$num1 = readline("Enter 1st number: ");
$num2 = readline("Enter 2nd number: ");

echo "Addition of $num1 and $num2 : " .$num1 + $num2 ."\n";
echo "Subtraction of $num1 and $num2 : " .$num1 - $num2 ."\n";
echo "Multiplication of $num1 and $num2 : " .$num1 * $num2 ."\n";

if($num2==0){
    echo "Division by $num2 is not possible!";
    echo "\n";
}
else
    echo "Division of $num1 and $num2 : " .$num1 / $num2 ."\n";

