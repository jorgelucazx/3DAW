<?php 
$msg = "";

if($_SERVER['REQUEST_METHOD']=='POST'){
        $pergunta = $_POST["pergunta"] ?? '';

    $r1 = $_POST["r1"] ?? '';
    $r2 = $_POST["r2"] ?? '';
    $r3 = $_POST["r3"] ?? '';
    $r4 = $_POST["r4"] ?? '';
    $certa  = $_POST["certa"] ?? '';

    if(!file_exists("perguntas.txt")){
        $arcPergunta = fopen("perguntas.txt","w");
        fwrite($arcPergunta , "id;pergunta\n");
        fclose($arcPergunta);
    }
    
    if(!file_exists("respostas.txt")){
        $arcResposta = fopen("respostas.txt","w");
        fwrite($arcResposta , "id;idpergunta;respostas;certa\n");
        fclose($arcResposta);
    }   


    $linha = file("perguntas.txt");
    $idPergunta = count($linha);


    $arcPergunta = fopen("perguntas.txt" , "a");
    $linha = $idPergunta . ";" . $pergunta . "\n";
    fwrite($arcPergunta,$linha);
    fclose($arcPergunta);

    $linha = file("respostas.txt");
    $idResposta = count($linha);

    $resposta = array($r1,$r2,$r3,$r4);

    $arcResposta = fopen("respostas.txt" , "a");

    for($i = 0 ; $i < 4 ; $i++){
        
        if ($i + 1 == $certa) {
            $correta= 1;
        } else {
            $correta= 0;
        }

        $linha = $idResposta . ";" . $idPergunta . ";" . $resposta[$i] . ";" . $correta . "\n";
        fwrite($arcResposta, $linha);

        $idResposta = $idResposta + 1;
    }

    fclose($arcResposta);
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
                <input type="text" name="pergunta" required>
            </label>
            <br><br>

            <p>Respostas</p>

              <input type="radio" name="certa" value="1" required>
        <input type="text" name="r1" required>
        <br><br>
          <input type="radio" name="certa" value="2" required>
        <input type="text" name="r2" required>
        <br><br>
          <input type="radio" name="certa" value="3" required>
        <input type="text" name="r3" required>
        <br><br>
          <input type="radio" name="certa" value="4" required>
        <input type="text" name="r4" required>
        <br><br>

         <input type="submit" value="Incluir pergunta">

        </form>

          <p><?php echo $msg; ?></p>
</body>
</html>
