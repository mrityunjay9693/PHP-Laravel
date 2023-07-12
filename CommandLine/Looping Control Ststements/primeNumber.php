<?php
/*
@mrityunjay9693
Q.21: Write a php program to print prime numbers upto user entered vlues.
*/
$num = readline("Enter value upto prime number will be printed: ");
//$factor = 1;

for($i=2; $i<=$num; $i++){
    $factor = 1;
    for($j=2; $j<=($i/2); $j++){

        if($i%$j == 0){

            $factor++;
        }        
    }
    if($factor==1){

        echo "$i\t";
    }
}

echo "\n";