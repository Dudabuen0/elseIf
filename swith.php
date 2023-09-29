<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    // declaração das variáveis
    $numero = 5;
    $nome = "";

    // lê a variável
    switch($numero) {


    // compara a variável
    case 4:
        echo "O número é igual a 4 <br>";
    break;

    // compara a variável
    case 5:
        echo "O número é igual a 5 <br>";
    break;

    // valor nulo
    default:
    echo "O número não corresponde aos valores <br>";
}

    // lê a variável 
    switch($nome) {

    // compara a variável
    case "Rosana": 
        echo "O nome é Rosana"; 
    break;

    // compara a variável 
    case "Isis": 
        echo "O nome é Isis"; 
    break;

    // valor nulo
    default:
        echo "O nome não foi encontrado";
}

?>
</body>
</html>