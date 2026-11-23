<?php
    
    require_once '../SQL/connect.php';

    if($_SERVER['REQUEST_METHOD']=="GET"){

        $name = $_GET["name"] ?? '';
        $email = $_GET["email"]?? '';
        $matricula = $_GET["matricula"] ?? '';


        require_once '../SQL/update.php';
    }

    $resp = json_encode($result);

    echo $resp;

?>




