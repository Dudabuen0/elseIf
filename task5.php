<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>

<?php

$contador = 4; // inicia o contador no 4

for ($i = 1; $i <= 30; $i++) {
    // verifica se o contador atingiu 24
    if ($contador == 26) {
        break;
    }
    
    echo "$contador<br>";

    // contador de 2 e 2
    $contador += 2;
}

?>


</body>
</html>