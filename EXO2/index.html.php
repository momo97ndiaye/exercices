<?php 
    require('fonction.php');
    echo "la longueur est:" . $long . "</p>";
    echo "la largeur est:" . $larg . "</p>";
    echo "son perimetre est:" . perimetre($long,$larg) . "</p>";
    echo "sa surface est:" . surface($long,$larg) . "</p>";
    echo "sa diagonale est:" . diagonale($long,$larg) . "</p>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button><a href="/TP_PHP/exercices/EXO1/index.html.php">EXERCICE 1</a></button>
<button><a href="/TP_PHP/exercices/EXO2/index.html.php">EXERCICE 2</a></button>
</body>
</html>