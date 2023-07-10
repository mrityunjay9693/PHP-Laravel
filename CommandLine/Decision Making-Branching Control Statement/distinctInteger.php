<?php
/* 
@mrityunjay9693
Q.19:Write a php program to read three value from user and
     print middle value if the three inputs are distinct.

*/

$num1 = readline("Enter 1st number: ");
$num2 = readline("Enter 2nd number: ");
$num3 = readline("Enter 3rd number: ");

if($num1 != $num2 && $num1 != $num3 && $num2 != $num3){
    echo "Middle value: $num2" ."\n";
}
else{
    echo "Please enter distinct values." ."\n";
}