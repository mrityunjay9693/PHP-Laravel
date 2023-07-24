<?php
/*
@mrityunjay9693
Q.26: Write a php program to print ASCII values of character from A to Z , a to z, 0 to 9.
ASCII of A = 65, Z = 90
ASCII of a = 97, z = 122
ASCII of 0 = 48, 9 = 57
*/

echo "ASCII of A to Z: ";
echo "\n";

for($ascii = ord('A'); $ascii <= ord('Z'); $ascii++){
    echo chr($ascii);
    echo " : " .$ascii ."\n";
}

echo "ASCII of a to z: ";
echo "\n";

for($ascii = ord('a'); $ascii <= ord('z'); $ascii++){
    echo chr($ascii);
    echo " : " .$ascii ."\n";
}

echo "ASCII of 0 to 9: ";
echo "\n";


for($ascii = 0; $ascii <= 9; $ascii++){
    
    echo "$ascii : ";
    echo ord($ascii) ;
    echo "\n";
    
}
