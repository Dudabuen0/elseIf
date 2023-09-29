<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa 3</title>
</head>
<body>
<?php
    //Declaração de variaveis
    $num = 27;
    $num2 = 65;
    $text = 'O Cravo e a Rosa';

    //Verifica se $num é numério e se é maior ou menor que 100
    if (is_numeric($num)) {
            $resultado= $num*2;
    }if ($num>100){
        echo "O número é maior que 100: $resultado <br>";
    }else{
        echo "O número é menor que 100: $resultado <br>";
    }
    
    //Verifica se $num2 é numério e se é maior ou menor que 100
    if (is_numeric($num2)) {
            $resultado2= $num2*2;
    }if ($num2<100){
        echo "O número é maior que 100: $resultado2 <br>";
    }else{
        echo "O número é menor que 100: $resultado2 <br>";
    }

    //Verifica se $num2 é numério e se é maior ou menor que 100
    if (is_numeric($text)) {
        echo $text . "  é numérico! <br>";
    }
    else {
        echo $text . "  não é numérico!";
    }
?>
</body>
</html>