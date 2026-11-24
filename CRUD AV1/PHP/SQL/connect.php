<?php 

    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "3daw";

    $conn = new mysqli($server,$user,$pass,$database);
    if($conn -> connect_error){
        die("Connection failed!");
    }

    $result = "";


?> 