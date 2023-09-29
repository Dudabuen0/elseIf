<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Declaração de variaveis
        $velocidade = 40;

        //Verifica velocidade 
        if ($velocidade >= 41 && $velocidade <= 50 ){
            echo "Você está na velocidade permitida!";
        }elseif ($velocidade <= 40 ){
            echo "Atenção você está muito devagar!";
        }elseif ($velocidade > 50){
            echo "Você ultrapassou a velocidade limite, multado!";
        }
    ?>
</body>
</html>