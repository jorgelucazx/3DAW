<?php 

    $sql = "INSERT INTO usuarios(nome,email,matricula) VALUES ('$name','$email','$matricula')";
    
    $result = $conn->query($sql);


?>