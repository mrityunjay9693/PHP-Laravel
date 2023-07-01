<?php
//Write a php program to take height and weight as input from user and
//Print the BMI(Body mas index) of the person.
//input = weight(in Kilogram), height(in meter) 
//BMI = wight/(height*height)

$weight = readline("Enter your Weight(kg): ");
$height = readline("Enter your height(m): ");

$bmi = $weight/($height*$height);

echo "Your BMI: $bmi" ."\n";