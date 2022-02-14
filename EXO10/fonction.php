<?php 
    function liste($n){
        echo"La Table de multiplication de ".$n." est: <br>";
        for($i=1;$i<=10;$i++)
        {
            echo $i." x ".$n." = ".$i*$n."<br>";

        }
    }
    function validNombre($nbre,string $key,array &$arrError ):void{
        if(estVide($nbre)){
            $arrError[$key]="Veullez saisir une valeur";
        }else{
            if(!estNombre($nbre)){
                $arrError[$key]="Veullez saisir un nombre";
            }
        }
       }
    function estNombre($nbre):bool
    {
        return is_numeric($nbre); 
    }
       function estVide($nbre):bool
    {
        return empty($nbre); 
    }
?>