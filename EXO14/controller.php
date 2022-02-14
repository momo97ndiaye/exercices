<?php
if(isset($_POST['corriger'])) {   
    $new = preg_replace("/\s+/"," ",$_POST['text']);
    echo $new;
    //header('location:index.php');
}
 ?>