<?php
    $dbHost = 'localhost';
    $dbUserName = 'root';
    $dbName = 'portfolio';
    $dbPassword = '';

    $con = mysqli_connect($dbHost,$dbUserName,$dbPassword,$dbName);

    if($con->connect_error){
        echo 'No Connected';
    }


?>
