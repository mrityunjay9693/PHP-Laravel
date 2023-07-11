<?php
/*
@mrityunjay9693
Q.16:Write a PHP program to read day number from user and
     print the correponding day name.
   
*/
$day_number = readline("Enter day number from 1 to 7: ");

echo "Day: ";

switch($day_number)
{
    case 1:
        echo "Sunday";
        break;

    case 2:
        echo "Monday";
        break;
    
    case 3:
        echo "Tuesday";
        break;

    case 4:
        echo "Wednesday";
        break;

    case 5:
        echo "Thursday";
        break;
    
    case 6:
        echo "Friday";
        break;
    
    case 7:
        echo "Saturday";
        break;
    
    default:
        echo "Wrong input!";


}

echo "\n";

