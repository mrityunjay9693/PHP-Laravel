<?php

require_once '.env.php';

$connection = null;

function connect()
{
    //mysqli_connect is a function here.

    $connection = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

}

connect();
echo "Connection Successfl\n";


