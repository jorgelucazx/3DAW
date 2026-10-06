<?php 
$msg = "";


if($_SERVER['REQUEST_METHOD']=='POST'){

        $pergunta = $_POST["pergunta"] ?? '';

    if(!file_exists("perguntas.txt")){
        $arcPergunta = fopen("perguntas.txt","w");
        fwrite($arcPergunta , "id;pergunta\n");
        fclose($arcPergunta);
    }
    


    $linha = file("perguntas.txt");
    $idPergunta = count($linha);


    $arcPergunta = fopen("perguntas.txt" , "a");
    $linha = $idPergunta . ";" . $pergunta . "\n";
    fwrite($arcPergunta,$linha);
    fclose($arcPergunta);


    $msg = "Pergunta " .$idPergunta. " salva!"  ;


}
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Inclusao de Perguntas</title>
</head>
<body>
        <h1><center>Incluir Pergunta</center></h1>
    

        <form action="incluir_pergunta.php" method="POST">
            <label for="pergunta">

         Entre com a Pergunta : <input type="text" name="pergunta" required>
               
            </label>
            <br><br>
            <input type="submit" name="enviar"  value="ENVIAR PERGUNTA">
        </form>
      
  
          <p><?php echo $msg; ?></p>

          <a href="incluir_resposta.php">Registar as repostas</a>
</body>
</html>