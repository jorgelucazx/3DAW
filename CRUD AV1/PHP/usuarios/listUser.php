<?php 

    require_once "../SQL/connect.php";
    require_once "../SQL/list.php";

        $users = array();
        $i = 0;

        if($result){

            while($linha  = $result ->fetch_assoc()){
            $users[$i] = $linha;
            $i++;
        }

        $retorno=json_encode($users);
    } else {
        $retorno=json_encode("ERROR!!");
    }
                
  
    echo $retorno;

?>