<?php
    $server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db = "wit";

    //connect to server and db
    $connection = mysqli_connect($server, $db_username, $db_password, $db);

    //checking status of connection
    if($connection){
        //echo "Connected successfully!";

        /*
        //inserting into db
        $query = "INSERT INTO participant(participant_name, participant_institution, participant_age) 
                    VALUES ('Karen', 'MMU', '18')";
        $result = $connection -> query($query);

        //checking if inserted correctly
        if($result){
            echo "Record inserted successfuly";
        } else {
            echo "Error in inserting record";
        }
        */

        /*
        //updating db
        $query = "UPDATE participant SET participant_name='Jane' WHERE participant_id='4'";
        $result = $connection -> query($query);

        //checking if record has been updated
        if($result){
            echo "Record updated successfuly";
        } else {
            echo "Error in updating record";
        }
        */

        //deleting record
        $query = "DELETE FROM participant WHERE participant_id='4'";
        $result = $connection -> query($query);

        //checking if record has been deleted
        if($result){
            echo "Record deleted successfuly";
        } else {
            echo "Error in deleting record";
        }

    } else {
        echo "Connection failed.";
    }
?>