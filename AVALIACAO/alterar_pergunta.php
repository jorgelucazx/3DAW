<?php

$msg = "";
$pergunta = "";
$idPergunta = "";



if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $idPergunta = $_GET["id"];

    $arcPergunta = fopen("perguntas.txt", "r") or die("erro ao abrir o arquivo!");

    while (!feof($arcPergunta)) {

        $linha = fgets($arcPergunta);

        $colunadados = explode(";", $linha);

        if ($colunadados[0] == $idPergunta) {

            $pergunta = $colunadados[1];
            break;
        }
    }
    fclose($arcPergunta);
    $msg = "Deu certo!";
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $idPergunta = $_POST["id"];
    $pergunta = $_POST["pergunta"];

    $arcPergunta = fopen("perguntas.txt", "r") or die("erro ao abrir o arquivo!");

    $linhas = [];

    while (($linha = fgets($arcPergunta)) !== false) {

        $colunadados = explode(";", $linha);

        if ($colunadados[0] == $idPergunta) {

            $linha = $idPergunta . ";" . $pergunta . "\n";
        }

        $linhas[] = $linha;
    }

    fclose($arcPergunta);


    
    $arcPergunta = fopen("perguntas.txt", "w") or die("erro ao abrir o arquivo!");

    foreach ($linhas as $linha) {

        fwrite($arcPergunta, $linha);
    }

    fclose($arcPergunta);

    $msg = "Pergunta alterada com sucesso!";
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
    <h1>Alterar Pergunta</h1>



    <form action="alterar_pergunta.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $idPergunta; ?>">

        <input type="text" name="pergunta" value="<?php echo $pergunta; ?>">

        <input type="submit" value="Salvar alteração">
    </form>

    <?php echo "$msg";?>

    <a href="listar_pergunta.php">ver pergunta</a>

</body>

</html>