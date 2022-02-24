<?php

include './dbConnection.php';

$name="";
$email="";
$message="";

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"]

    $query = "INSERT INTO tableName (columnName1, columnName2, columnName3) "
                    . "VALUES ('" . $name . "','" . $email . "','" . $message . "')";

            
                    $isSaved = mysqli_query($connection, $query);
?>