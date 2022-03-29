<?php

$host = "localhost";
$username = "root";
$passwd = "ass34";
$dbname = "opd_channeling_db";
$port = "3307";//port identification


$connection = new mysqli($host, $username, $passwd, $dbname, $port);

if ($connection->connect_error) {
    echo 'Error !, Not Connected' 
     $connection->connect_error;
} else {
     echo "conected Successfully";
}

?>