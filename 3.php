<?php
 include './dbConnection.php';

$email="";
$password="";

if(isset($_POST["email"]) && isset($_POST["password"])){

     $email=$_POST["email"];
     $password=$_POST["password"];


    if ($email == "") {
        header("Location: ./1.php");
        die();
    } elseif ($password == "") {
        header("Location: ./1.php");
        die();
    } else {
        $query = "SELECT * FROM tableName WHERE email = '" . $email . "'";
        $result = $connection->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $emailDB = $row["email"];
            $passwordDB = $row["password"];
            if ($email == $emailDB && $password == $passwordDB) {
                header("Location: ./1.php");
                die();
                exit();
            } else {
                header("Location: ./1.php");
                die();
            }
        } else {
            header("Location: ./1.php");
            die();
        }
    }
}
