<?php
//Program to read length and breadth of a reactangle from user and 
//print the area and perimeter of reactangle.

$length = readline("Enter Length of reactangle: ");
$breadth = readline("Enter Breadth of reactangle: ");

echo "Area of reactangle : " .($length * $breadth) ."\n";
echo "Perimeter of reactangle : " .(2*($length + $breadth)) ."\n";