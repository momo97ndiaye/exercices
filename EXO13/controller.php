<?php
session_start();
if(isset($_POST['corriger'])) {
    $content = $_POST['text'];
    $content = trim($content);
    if (preg_match("#^[A-Z]#",$content) && preg_match("#[\?.\!]$#",$content)) {
    $new = preg_replace("/\s+/"," ",$content);
    echo $new;
    }else{
        $_POST['text']="phrase incorrecte";
        echo $_POST['text'];
    }
    //header('location:index.php');
}

 ?>