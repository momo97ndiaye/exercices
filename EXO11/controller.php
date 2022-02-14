<?php 
include_once("fonction.php");
session_start();
$tab = [
    "premier" => [],
    "inferieur" => [],
    "superieur" => []
];
if(isset($_POST['btn_ok']))
    {
    $a=$_POST['a'];
    $_SESSION['post']=$_POST;
    $arrError=[];
    validNombre($a,"a",$arrError);
    if(count($arrError)==0){
        echo"Les Nombres premiers compris entre 1 et ".$a. " sont : <br><br>";
        $som=0;        
        $moy=0;
        for($i=1;$i<=$a;$i++){
            if(nombrePremier($i)){
                $tab["premier"][]=$i."<br>";       
            }
            $som+=$i;

        }
        $premier= $tab["premier"];
        echo"<table border=1 width=20%>";
        foreach($premier as $i=> $d){
            if($i%3==0)
            {
                echo"<tr>";
            }
            echo "<td>".$d."</td>";
            if(($i+1)%3==0){
                echo"</tr>";   
            }
        }
        echo"</table><br>";

        $moy=$som/$a;
        echo "La moyenne est : ".$moy."<br> <br>";

        echo"Les nombres inferieurs a la moyenne sont : <br><br>";
        for($i=1;$i<=$a;$i++){
            if($i<$moy){
                $tab["inferieur"][]=$i."<br>";
            }
        }
        $inferieur= $tab["inferieur"];
        echo"<table border=1 width=20% >";
        foreach($inferieur as $i=> $d){
            if($i%3==0)
            {
                echo"<tr>";
            }
            echo "<td>".$d."</td>";
            if(($i+1)%3==0){
                echo"</tr>";   
            }
        }
        echo"</table><br>";

        echo"Les nombres superieurs a la moyenne sont : <br><br>";
        for($i=1;$i<=$a;$i++){
            if($i>$moy){
                 $tab["superieur"][]=$i."<br>";
            }
        }
        $superieur= $tab["superieur"];
        echo"<table border=1 width=20%>";
        foreach($superieur as $i=> $d){
            if($i%3==0)
            {
                echo"<tr>";
            }
            echo "<td>".$d."</td>";
            if(($i+1)%3==0){
                echo"</tr>";   
            }
        }
        echo"</table><br>";


    }else{
        $_SESSION['error']=$arrError;
        //var_dump( $_SESSION);
        header('location:index.php'); 
        exit();
    }
}else{
    //Redirection
    header('location:index.php');
    exit();
}
?>
