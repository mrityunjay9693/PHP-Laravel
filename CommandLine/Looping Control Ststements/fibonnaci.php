<?php
/*
@mrityunjay9693
Q.20:Write a PHP program to read three integer value from user and
     print the biggest value.
*/
$num = readline("Enter number upto fibonnaci series will print: ");

$f_no = 0;  // $f_no = first numbe
$s_no = 1;  // $s_no = second number

echo "Fibonnaci series: ";
for($i=1; $f_no<=$num; $i++){

    echo "$f_no\t";

    $n_no = $f_no + $s_no; // $n_no= next number
    $f_no = $s_no;
    $s_no = $n_no;
}

echo "\n";