<?php

include './dbConnection.php';

$name="";
$email="";
$message="";

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"]

    $query = "INSERT INTO tableName (name, email, message) "
                    . "VALUES ('" . $name . "','" . $email . "','" . $message . "')";

            
                    $isSaved = mysqli_query($connection, $query);


                    if ($isSaved) {
                        header("Location: ../index.php?msg=Register Successful !");
                        die();
                    } else {
                        header("Location: ../index.php?msg=Error,Register Unsuccessful !");
                        die();
                    }
        
        }

?>