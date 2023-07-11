<?php
/*
@mrityunjay9693
Q.14:Writea PHP program to calculate the simple interest
  of the amount which is given by the user.
  S.I = (amount * interest * time ) / 100 
*/

$amount = readline("Enter amount: ");
$interest = readline("Enter interest: ");
$time = readline("Enter time: ");

$si = $amount*$interest*$time/100;
echo "Simple interest(S.I): $si" ."\n";
