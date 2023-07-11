<?php
/*
@mrityunjay9693
Q.12:Write a program in php to read a number as input from user and 
     print it, is it even or odd.
*/
//$EvenOdd = array("even","odd");
$number = readline("Enter number: ");

if($number%2==0){
    echo "$number is even" ."\n";
}
else{
    echo "$number is odd" ."\n";
} 

//echo "$number is : array($number%2)" ."\n";
