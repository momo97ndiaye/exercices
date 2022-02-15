<!DOCTYPE html>
<html>
<body>


<form action="controller.php" method="POST">
  <label for="taille">Taille de la matrice</label>
  <input type="text" id="taille" name="taille">
  <input type="submit" name="dessiner" value="dessiner"><br><br>
  <label for="couleur">Choix de la couleur</label>
<select id="couleur" name="couleur">
  <option name="bleu" value="bleu">Bleu</option>
  <option name="rouge"  value="rouge">Rouge</option>
  
</select><br><br>
<div>
    <input type="radio" id="haut"
     name="radio" value="haut" action="">
    <label for="haut"> En Haut</label>
    <input type="radio" id="bas"
     name="radio" value="bas">
    <label for="bas">En Bas</label>
  </div>
</form>
<br>
<button><a href="/TP_PHP/exercices/EXO14/index.php">Precedent</a></button>




</body>
</html>
