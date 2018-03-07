<?php
    $server = "localhost";
    $db = "wit";
    $db_username = "root";
    $db_password="";

    //create the connection
    $conn = mysqli_connect($server, $db_username, $db_password, $db);

    if($conn){
        //echo "Connected successfully";
        /*$username = $_POST["username"];
        $password = $_POST["password"];*/

        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "INSERT INTO user(username, password) VALUES ('$username', '$password')";
        $result = $conn -> query($query);

        if($result){
            echo "Data saved successfully";
        }else{
            echo "Saving failed";
        }
    }else{
        echo "Connection error";
    }
?>