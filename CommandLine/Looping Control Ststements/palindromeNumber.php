<?php
/*
@mrityunjay9693
Q.22: Write a php program to print the input numbers is palindrome or not.
Palindrome Number : Such number remains the same after the reversed of 
                    its digit
*/
$num = readline("Enter a number: ");
$temp = $num;

$rev_num = 0; // $rev_no = reverse number

while(floor($num)){
    $digit = $num % 10;
    $rev_num = $rev_num*10 + $digit;
    $num = $num / 10;
   
}

//in if-else comparing values of $rev_no with $temp.
//if values equals, then palindrome and if values differ to each other, not palindrome.

if($temp == $rev_num){
    echo "$rev_num is a Palindrome number";
}
else{
    echo "$rev_num is not a Palindrome number";
}

echo "\n";