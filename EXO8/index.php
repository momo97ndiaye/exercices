<?php 
   session_start();
?>
<form action="controller.php" method="post">
    <label for="">Entrer une valeur</label>
      <input type="text" name="a" id="" value="<?php if(!isset($_SESSION['error']['a']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['a']; else ''  ?>"> 
      <?php if(isset($_SESSION['error']['a'])):?>
        <br>
            <span style="color:red"><?php echo $_SESSION['error']['a'] ?></span>
      <?php endif?>
      <br>

      <input type="submit" name="btn_ok" id="" value="ok">
</form>
<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

?>