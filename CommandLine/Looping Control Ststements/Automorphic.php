<?php
/*
 @mrityunjay9693
 Q.28: Write a php program to check whetehr the user enetered numbers is autmorphic or not.
 Automorphic Number : It is a number whose square ends with the same number itself. 
            input = 25, sq of 25 = 625, ends with 25 itself
 */

$num = readline("Enter number: ");

$temp = $num;    //storing input taken in $num into $temp.

$noOfDigit = countDigit($num); // countDigit return no of digit of $num

$divisor = 1; 

while($noOfDigit>0){   // $noOfDigit = 2
    $divisor = $divisor * 10;
    $noOfDigit--; 
}
//Now $divisor = 100;

$SquareOfNum = $num * $num;  // square of input number.

$compare = $SquareOfNum % $divisor;

if($compare == $temp){

    echo "$temp is Automorphic";
    echo "\n";
}
else{
    echo "Invalid input";
    echo "\n";
}
echo "\n";



    










//function countDigit to count no of digit in $num
function countDigit($num)
{
    $count = 0;
    while($num!=0){
        $num = round($num / 10);
        ++$count;
    }
    return $count;
}








