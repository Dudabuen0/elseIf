<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If e Else</title>
</head>
<body>
    <?php
    $numero1 = 5;
    $numero2 = 2;
    $nome1 = 'Joaõ';
    $nome2 = 'Robson';
    $numero3 = 12;
    $numero4 = 11;

    //Verifica se $numero1 é maior que $numero2.
    if ($numero1 > $numero2){
        echo "A expressão é verdadeira! <br>";
    }else{
        echo "A expressão é falsa! <br>";
    }
    //Verifica se $nome1 é diferente de $nome2.
    if ($nome1 != $nome2){
        echo "João é diferente de Robson! <br>";
    }else{
        echo "João é igual a Robson!";
    }
    //Verifica se $numero3 é maior ou igual a $numero4.
    if ($numero3 <= $numero4){
        echo "12 é maior que 11! <br>";
    }else{
        echo "12 não é maior, é igual a 11! <br>";
    }
    ?>
</body>
</html>
