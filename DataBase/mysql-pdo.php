<?php
namespace pdo;

//use mysqli;

class mysql_pdo{

    // we have to not use $connect outside from here and that's why we do encapsulate it here 
    // by declaring $connect as private.
    private $connection_string = null;

    //Connection String
    // private $connection = "mysql:host=" .HOST . ";" . "dbname=" . DATABASE;

    function __construct()
    {

        //here, we will create connection's object and other things.
        $connection = new \PDO(CONNECTION_STRING, USERNAME, PASSWORD);

    }
    
}

