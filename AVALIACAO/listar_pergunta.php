    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listagem de PERGUNTAS</title>
    </head>
    <body>
        <h1><center>Lista de PERGUNTAS</center></h1>

        <table>

            <?php 

            $primeiralinha = true;
            
            $arcPerguntas = fopen("perguntas.txt" ,"r") or die("erro ao abrir o arquivo!");
            
            while(( $linha = fgets($arcPerguntas)) !==false){
        
            $colunadados = explode(";",$linha);

            echo "<tr>";

            for( $i = 0; $i<2;$i++){
                echo "<td>" . $colunadados[$i] . "</td>";
               
        
            }
                        
            if(!$primeiralinha){
                    echo "<td>";
                    echo "<a href='alterar_pergunta.php?id=" . $colunadados[0] . "'>Editar</a>";
                    echo "</td>";
                }

            echo "</tr>";
            $primeiralinha = false;
            
            }
            
                fclose($arcPerguntas);
                $msg = "Deu certo!!";
            ?>

        </table>    
            
            <p> <?php echo $msg ?> </p>
        <br>

    

    </body>
    </html>