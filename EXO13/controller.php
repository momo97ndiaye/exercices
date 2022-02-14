<?php
if(isset($_POST['corriger'])) {
    $content=$_POST['text'];
    $new = preg_replace("/\s+/"," ",$content);
    echo $new;
    //header('location:index.php');
}
 ?>