<?php 
include_once("fonction.php");

  session_start();
if(isset($_POST['btn_ok'])){
    $jour=$_POST['jour'];
    $mois=$_POST['mois'];
    $an=$_POST['an'];
    $_SESSION['post']=$_POST;
    $arrError=[];
    validJour($jour,"jour",$arrError);
    validMois($mois,"mois",$arrError);
    validAn($an,"an",$arrError);
    if(count($arrError)==0){

    if(!dateValid($mois,$jour,$an))
        {
            echo"Vous avez saisi une mauvaise date";
        }else{
            echo"Vous avez saisi une  date valide";
        }
        
    
    }else{
        $_SESSION['error']=$arrError;
        //var_dump( $_SESSION);
        header('location:index.html.php'); 
        exit();
    }
}else{
    //Redirection
    header('location:index.html.php');
    exit();
}
