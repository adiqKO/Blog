<?php

session_start();
try {
    $connect = mysqli_connect("localhost", "root", "", "blogtest");
    if (! $connect) {
        throw new Exception("Could not connect!");
    }
}
catch(Exception $e){

    echo $e->getMessage();
}

define ('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/BlogTest/');