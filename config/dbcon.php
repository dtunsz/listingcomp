<?php

    $Servername ="localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "bizis";
    
    $connection = mysqli_connect($Servername, $dbUsername, $dbPassword, $dbName);

    if(!$connection) {
        die("Connection Failed: ".mysqli_connect_error());
    }



