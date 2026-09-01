<?php 

         $nome ="";
        $email = "";
        $matricula = "";
        $cpf = "";
        $msg = "";

        if($_SERVER['REQUEST_METHOD']=='GET'){
            $matricula = $_GET["matricula"];
            $msg = "";
            echo " matricula: " . $matricula;

            $arcAluno = fopen("aluno.txt" , "r") or die("erro ao abrir o arquivo!");

          while(!feof($arcAluno)){

    $linha = fgets($arcAluno);

    $colunadados = explode(";", $linha);

    if($colunadados[2] == $matricula){

        $nome = $colunadados[0];
        $email = $colunadados[1];
        $cpf = $colunadados[3];

        break;
    }
}
            fclose($arcAluno);
            $msg = "Deu certo!";
        }
        
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alterar Aluno</h1> 

    <li><a href="incluir_alunos.php">Incluir Aluno</a></li>
    <li><a href="listar_alunos.php">Lista de Alunos</a></li>
   
    <form action="alterar_aluno.php" method="GET">
         Nome : <input type="text" name="nome" value='<?php echo $nome ?>'> <br>
        E-mail : <input type="text" name="email" value='<?php echo $email ?>'> <br>
        Matrícula : <input type="text" name="matricula" value='<?php echo $matricula ?>'> <br>
        CPF : <input type="text" name="cpf" value='<?php echo $cpf?>'><br>
         <input type="submit" value="Alterar Aluno">
    </form>
</body>
</html>
