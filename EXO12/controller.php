<?php 
session_start();
$tab1=array(
    "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Aout",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre"
);
$tab2=array(
    "January",
    "Febrary",
    "Mars",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
);
$_SESSION['fr']=$tab1;
if(isset($_POST['change'])){
    if($_POST['langue']=="francais"){
        
    header('location:index.php');
       
    }else if($_POST['langue']=="anglais"){
        $_SESSION['fr']=$tab2;
        header('location:index.php');
    }else{
        header('location:index.php');
    }
}