<?php
/*
@mrityunjay9693
Q.25: write a php program, to read a int value from user and print sanju, if value is divisible by 3,
      print geeta, if value is divisible by 5, print sanju weds geeta if number is divisible by both 
      3 and 5, otherwise breakup.

*/

$num = readline("Enter a number: ");
if($num % 3 == 0 && $num % 5 == 0){

    echo "sanju weds geeta";

}
else if($num % 3 == 0){

    echo "sanju";


}
else if($num % 5 == 0){
    
    echo "geeta";

}
// else if($num % 3 == 0 && $num % 5 == 0){

//     echo "sanju weds geeta";

// }
else{
    echo "breakup";
}
echo "\n";