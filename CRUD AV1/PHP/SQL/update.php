<?php 
   
   $sql = "UPDATE usuarios SET nome = '$name',email = '$email' WHERE matricula = '$matricula '";

   $result = $conn->query($sql);
    
    
    
?>