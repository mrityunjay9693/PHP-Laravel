<?php
//Program to read radius from user and calculate the area and circumference of circle

$radius = readline("Enter radius : ");

echo "Area of circle : " .(3.14*($radius*$radius)) ."\n" ;
echo "Circumference of circle : " .(2*3.14*($radius)) ."\n" ;