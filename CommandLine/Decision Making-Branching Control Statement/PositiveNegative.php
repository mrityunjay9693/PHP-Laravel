<?php
/*
@mrityunjay9693
Q.7: A PHP program to take input from user and 
     Print, is the input is "positive", "negative", or "zero"
*/

$number = readline("Enter a number: ");

if($number>0){

    echo "$number is Positive";

}

if($number<0){

    echo "$number is Negative";

}

if($number == 0){
    
    echo "The entered number is Zero" ."\n";

}