<?php
//include 'Credential.php';
//require 'Credential.php';
function database_mysqli_procedural()
{


}

function database_mysqli_object_oriented()
{
   require 'Credential.php';
   $con = new mysqli($server, $user, $password);

} 

function database_pdo()
{
    
}

database_mysqli_object_oriented();