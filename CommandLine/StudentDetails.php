//Program to read name, mobile number, 10th percentage, 12th Percentage and Degree percentage and displaying the details taken in console.

<?php
///taking inputs

$name = readline("Enter Name of the Students: ");
$mobile_no = readline("Enter the mobile number: ");
$tenth_percentage = readline("Enter 10th Percentage: ");
$twelfth_percentage = readline("Enter 12th Percentage: ");
$degree_percentage = readline("Enter Degree Percentage: ");

//echoing the output

echo "Name : " .$name ."\n";
echo "Mobile Number : " .$mobile_no ."\n";
echo "10th % : " .$tenth_percentage ."\n";
echo "12th % : " .$twelfth_percentage ."\n";
echo "Degree % : " .$degree_percentage ."\n";