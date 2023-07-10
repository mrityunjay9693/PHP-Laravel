<?php
/*
@mrityunjay9693
Q.17:Write a PHP program to read month number from user and
     print corresponding how many days are in respective month?
*/
$month_number = readline("Enter month number from 1 to 12: ");

if($month_number>0 && $month_number<13){

    if($month_number == 4 || $month_number == 6 || $month_number == 9 || $month_number == 11){
        
        echo "Number of days: 30 ";
    }
    elseif($month_number==1 || $month_number==3 || $month_number==5 || $month_number==7 || $month_number==8 || $month_number==10 || $month_number == 12){
        
        echo "Number of days: 31";
    }
    else{

        echo "Number of days: 28 or 29";
    }

}
