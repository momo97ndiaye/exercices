<?php 

session_start();

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
<form action="controller.php" method="POST">
  <p>Veuillez choisir une langue</p>
  <div>
    <input type="radio" id="francais"
     name="langue" value="francais" action="">
    <label for="francais">Francais</label>

    <input type="radio" id="anglais"
     name="langue" value="anglais">
    <label for="anglais">Anglais</label>
  </div>
  <div>
    <br>
    <button type="submit" name="change">Changer</button>
  </div>
  <br>
</form>

</body>
</html>
<?php 


echo"<table border=1 width=20%>";
foreach($_SESSION['fr'] as $i=> $d){
    if($i%3==0)
    {
        echo"<tr>";
    }
    echo "<td>".$d."</td>";
    if(($i+1)%3==0){
        echo"</tr>";   
    }
}
echo"</table><br>";
?>
<button><a href="/TP_PHP/exercices/EXO11/index.php">Precedent</a></button>
<button><a href="/TP_PHP/exercices/EXO13/index.php">Suivant</a></button>