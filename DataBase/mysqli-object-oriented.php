<?php

namespace mysql;

class mysql_mysqli{
    private $onnection = null;
    function __construct()
    {
        $connection = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    }
    
}