<?php
/*
@mrityunjay9693
Q.24: Write a php program to check the given numbers is Armstrong or not.
Armstrong Number : Such number which is equal to sum of cubes of its digit. 
                    its digit
*/
$num = readline("Enter a number: ");
$num1 = $num;
$armstrong = 0;

while(floor($num))
{
    $digit = $num % 10;
    $armstrong = $armstrong + ($digit * $digit * $digit);
    $num = $num/10;
}

if($armstrong == $num1){
    echo "$num1 is a Armstrong number";
}
else{
    echo "$num1 is not a Armstrong number";
}
echo "\n";