<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><center>Lista de Alunos</center></h1>

    <table>

        <?php 

        $i;
        $arcAluno = fopen("aluno.txt" ,"r") or die("erro ao abrir o arquivo!");
    
        while(( $linha = fgets($arcAluno)) !==false){
    
        $colunadados = explode(";",$linha);

        echo "<tr>";

        for( $i = 0; $i<4;$i++){
            echo "<td>" . $colunadados[$i] . "</td>";
        }
        echo "</tr>";
        }
            fclose($arcAluno);
            $msg = "Deu certo!!";
        ?>

    </table>    
        
        <p> <?php echo $msg ?> </p>
    <br>

    <a href="alterar_aluno.php">Alterar aluno</a>   

</body>
</html>