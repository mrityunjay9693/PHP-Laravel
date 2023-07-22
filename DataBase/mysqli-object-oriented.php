<?php

namespace mysql;

//use mysqli;

class mysql_mysqli{
    private $onnection = null;
    function __construct()
    {
        //mysqli is a class here
        //HOST, USERNAME, DATABASE are constant here.
        $connection = new \mysqli(HOST, USERNAME, PASSWORD, DATABASE);

        //$pdo = new \pdo\mysql_pdo();
    }
    
}