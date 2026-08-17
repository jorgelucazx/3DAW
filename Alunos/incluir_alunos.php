<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $matricula = $_POST['matricula'];
        $cpf = $_POST['cpf'];
        $msg = "";

        echo "nome: " . $nome ."<br>" ." email: " . $email ."<br>" . "matrícula : ". $matricula ."<br>". "cpf :" . $cpf ."<br>";

        if(!file_exists("aluno.txt")){

            $arcDisc = fopen("aluno.txt" , "w") or die("Erro ao criar o arquivo");
            $linha = "nome;email;matricula;cpf\n";

            fwrite($arcDisc,$linha);
            fclose($arcDisc);
        }
        $arcDisc = fopen("aluno.txt" , "a") or die("Erro ao criar o arquivo");
        $linha = $nome. ";" .$email. ";" . $matricula . ";" . $cpf . "\n";


        fwrite($arcDisc,$linha);
        fclose($arcDisc);

        $msg = "Deu certo!";
    }


?>
