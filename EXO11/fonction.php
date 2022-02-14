<?php 
    function nombrePremier($n){
        $cpt=0;
        for($i=1;$i<=$n;$i++){
            if($n % $i==0){
                $cpt++;
            }
        }
        if($cpt==2){
            return true;
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