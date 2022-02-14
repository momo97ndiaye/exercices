<?php 
   session_start();
?>
<form action="controller.php" method="post">
    <label for="">Entrer un Jour</label>
      <input type="text" name="jour" id="jour" value="<?php if(!isset($_SESSION['error']['jour']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['jour']; else ''  ?>"> <br>
      <?php if(isset($_SESSION['error']['jour'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['jour'] ?></span>
      <?php endif?>
      <br>
    <label for="">Entrer un Mois</label>
      <input type="text" name="mois" id="" value="<?php if(!isset($_SESSION['error']['mois']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['mois']; else ''  ?>" > <br>
      <?php if(isset($_SESSION['error']['mois'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['mois'] ?></span>
      <?php endif?>
      <br>
    <label for="">Entrer une Année</label>
      <input type="text" name="an" id="" value="<?php if(!isset($_SESSION['error']['an']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['an']; else ''  ?>"><br>
        <?php if(isset($_SESSION['error']['an'])):?>
                <span style="color:red"><?php echo $_SESSION['error']['an'] ?></span>
        <?php endif?>
      <br>

      <input type="submit" name="btn_ok" id="" value="ok">


</form>

<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>