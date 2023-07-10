<?php
/*
@mrityunjay9693
Q.13:Writea PHP program to read integer value from user and 
    Print, is the integer is a special 2-digit number or not?
*/

$num = readline("Enter 2-digit number: ");
$temp = $num;
$sum = 0;
$prod = 1;

//while loop for extracting digit from input(number)
while($temp>1){  

    $digit = $temp % 10;   // 59%10 =  9 , 5
    
   
    $sum = $sum + $digit;
    $prod = $prod * $digit;
    $temp = $temp / 10;   // 59/10 = 5.9 , 0.59

} 

if(($sum + $prod) == $num){
   
    echo "$num is a 2-Digit Special Number" ."\n";
}  
else{

    echo "$num is not a 2-Digit Special Number" ."\n";

}

