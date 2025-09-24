<?php
    $dbHost = 'localhost';
    $dbName = 'rabc_project';
    $dbUserName = 'root';
    $dbPassword = '';

    $con = mysqli_connect($dbHost,$dbUserName,$dbPassword,$dbName);

    if($con->connect_error){
        die("Database not connected");
    }


?>