<?php 
   function validJour($nbre,string $key,array &$arrError ):void{
    if(estVide($nbre)){
        $arrError[$key]="Veuillez saisir une valeur";
    }else{
        if(!estJourValide($nbre)){
            $arrError[$key]="Veullez saisir un Jour Valide entre 1 et 31";
            
        }
    }
    
   }
   function validMois($nbre,string $key,array &$arrError ):void{
    if(estVide($nbre)){
        $arrError[$key]="Veullez saisir une valeur";
    }else{
        if(!estMoisValide($nbre)){
            $arrError[$key]="Veullez saisir un Mois Valide entre 1 et 12";
            
        }
    }
    
   }
   function validAn($nbre,string $key,array &$arrError ):void{
    if(estVide($nbre)){
        $arrError[$key]="Veullez saisir une valeur";
    }else{
        if(!estAnValide($nbre)){
            $arrError[$key]="Veullez saisir une annnée valide";
            
        }
    }
    
   }
   function estJourValide($nbre):bool{
       if($nbre<=31 and $nbre>=1){
        return true;
       }
       return false; 
   }
   function estMoisValide($nbre):bool{
    if($nbre<=12 and $nbre>=1){
     return true;
    }
    return false; 
}
function estAnValide($nbre):bool{
    if($nbre>=1583){
     return true;
    }
    return false; 
}

   function estVide($nbre):bool{
    return empty($nbre); 
}
function dateValid($mois,$jour,$an){
    return checkdate($mois,$jour,$an);
}
?>