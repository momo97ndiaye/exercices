

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="container">
<form action="" method="post">
<label for="story">Veuillez saisir des numéros:</label>
<br><br>
<textarea  name="text"
          rows="5" cols="71">

</textarea><br><br>
<input type="submit" name="corriger" value="Ajouter">
<br>
<br>
<textarea name="story"
          rows="5" cols="33">
<?php 
include_once('controller.php');
?>
</textarea>
<textarea name="story"
          rows="5" cols="33">
</textarea>
</form>

</div>
</body>
</html>