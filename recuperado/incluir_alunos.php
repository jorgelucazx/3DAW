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

         
        }
           $msg = "Deu certo!";


    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1><center>Registrar Aluno</center></h1>


     

     <form action="incluir_alunos.php" method="POST">
        Nome : <input type="text" name="nome" required> <br>
        E-mail : <input type="text" name="email" required> <br>
        Matrícula : <input type="text" name="matricula" required> <br>
        CPF : <input type="text" name="cpf" required><br>
         <input type="submit" value="Registrar Aluno">
     </form>
     <p><?php  echo $msg  ?> </p>

     <a href="listar_alunos.php">Lista de alunos</a>
</body>
</html>