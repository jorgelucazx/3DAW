

    <?php 

        $numero1 =$_GET["num1"];
        $numero2 =$_GET["num2"];
        $operador =$_GET["op"];
       
        switch ($operador){
            case "+":
                $result = $numero1+$numero2;
                break;
            case "-":
                $result = $numero1+$numero2;
                break;
            case "*":
                $result = $numero1*$numero2;
                break;
            case "/":
                    $result = $numero1/$numero2;
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
    <?php
        echo "Resultado : $result";
    ?>
</body>
</html>

    