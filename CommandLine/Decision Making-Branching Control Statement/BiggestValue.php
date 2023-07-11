<?php
/*
@mrityunjay9693
Q.16:Write a PHP program to read three integer value from user and
     print the biggest value.
*/
$num1 = readline("Enter 1st value: ");
$num2 = readline("Enter 2nd value: ");
$num3 = readline("Enter 3rd value: ");

if($num1 > $num2 && $num1 > $num3){

    echo "$num1 is the biggest value.";

}
elseif($num2 > $num3){

    echo "$num2 is the biggest value.";

}
else{

    echo "$num3 is the biggest value.";

}