<?php
/*
@mrityunjay9693
Q.23: Write a php program to calculate the factorial of given numbers.
Factorial : It is a product of all positive descending integers. 
            i.e, n*(n-1)(n-2)(n-3).... 
*/
$num  = readline("Enter a numer: ");
$num1 = $num;
$fact = 1;

while(floor($num))
{
    $fact = $fact * $num;
    $num--;  //$num = 5, $num-- = 5,4,3,2,1

}

echo "Factorial of $num1 = $fact";
echo "\n";