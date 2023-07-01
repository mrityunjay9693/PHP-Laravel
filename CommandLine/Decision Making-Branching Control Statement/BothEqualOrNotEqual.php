<?php
//A php program to read two integer value from user and
//Print those two are equal or not.

$num1 = readline("Enter 1st number: ");
$num2 = readline("Enter 2nd number: ");

//if-else statement to check these two entered integers are equal or not
//We use condition, if($num1 == num2) both inputs are equal, else , both are nt equal

if($num1 == $num2){

    echo "Both integers are equal" ."\n";

}
else{

    echo "$num1 and $num2 are not equal" ."\n";
}