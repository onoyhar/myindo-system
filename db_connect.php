<?php
    $localhost = "localhost";
    $username = "myindo-dev";
    $password = "admin4myind0";
    $dbname = "myindo_systems";
    // create connection
    $connect = new mysqli($localhost, $username, $password, $dbname);
    // check connection
    if($connect->connect_error) {
        die("connection failed : " . $connect->connect_error);
    } else {
        //echo "Successfully Connected";
    }
?>
