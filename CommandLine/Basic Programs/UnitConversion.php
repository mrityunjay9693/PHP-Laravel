<?php
//Write a program in PHP to read a length of a pipe from user in centimeter and
//print the length in foot and meter
// 1m = 100 cm
// 1 foot = 30.48 cm

$length_in_cm = readline("Enter length of pipe in cm: ");

$length_in_foot = $length_in_cm/30.48;
$length_in_meter = $length_in_cm/100;

echo "Length in foot: " .$length_in_foot ."foot" ."\n";
echo "Length in meter: " .$length_in_meter ."m" ."\n";