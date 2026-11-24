<?php 

    $sql = "DELETE FROM usuarios WHERE matricula = '$matricula'";

    $result = $conn->query($sql);
?>