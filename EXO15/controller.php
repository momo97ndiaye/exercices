<?php 
include_once("fonction.php");

  session_start();
if(isset($_POST['dessiner'])){
    $taille=$_POST['taille'];
    $couleur=$_POST['couleur'];
    $radio=$_POST['radio'];
    $_SESSION['post']=$_POST;
    $arrError=[];
    validNombre($taille,"taille",$arrError);
    if(count($arrError)==0){
        var_dump($couleur,$radio);
        if ($_POST['couleur']=="bleu"&&$_POST['radio']=="bas") {
            coloriagebleubas($taille);
        }
        if ($_POST['couleur']=="rouge"&&$_POST['radio']=="bas") {
            coloriagerougebas($taille);
        }
        if ($_POST['couleur']=="bleu"&&$_POST['radio']=="haut") {
            coloriagebleuhaut($taille);
        }
        if ($_POST['couleur']=="rouge"&&$_POST['radio']=="haut") {
            coloriagerougehaut($taille);
        }

    }else{
        $_SESSION['error']=$arrError;
        header('location:index.php'); 
        exit();
    }
}else{
    //Redirection
    header('location:index.php');
    exit();
}