<?php 
   function validNombre($nbre,string $key,array &$arrError ):void{
    if(estVide($nbre)){
        $arrError[$key]="Veullez saisir une valeur";
    }else{
        if(!estNombre($nbre)){
            $arrError[$key]="Veullez saisir un nombre";
        }else{
            
            if($nbre<5){
                $arrError[$key]="Veullez saisir un nombre supérieur a 5";
            }
            
        }
        
    }
   }
   function estNombre($nbre):bool{
       return is_numeric($nbre); 
   }
   function estVide($nbre):bool{
    return empty($nbre); 
}
function matrice($n){
echo '<table border=1 width=200px height=200px>';
for ($i=1; $i<=$n; $i++) {
   echo '<tr>';
   for ($j=1; $j<=$n; $j++) {
       
         echo "<td bgcolor='#00ffff'>";
         echo $affichage=1;
         echo '</td>';
   }
   echo '</tr>';
}
echo '</table>';
}
function coloriagebleubas($n){
    echo '<table border=1 width=200px height=200px>';
    for ($i=1; $i<=$n; $i++) {
       echo '<tr>';
       for ($j=1; $j<=$n; $j++) {
           if ($i>$j) {
            echo "<td bgcolor='#00ffff'>";
            echo $affichage;
            echo '</td>';
           }
       }
       echo '</tr>';
    }
    echo '</table>';

}
function coloriagerougebas($n){
    echo '<table border=1 width=200px height=200px>';
    for ($i=1; $i<=$n; $i++) {
       echo '<tr>';
       for ($j=1; $j<=$n; $j++) {
           if ($i>$j) {
            echo "<td bgcolor='#ff0000'>";
            echo $affichage;
            echo '</td>';
           }
       }
       echo '</tr>';
    }
    echo '</table>';

}
function coloriagebleuhaut($n){
    echo '<table border=1 width=200px height=200px>';
    for ($i=1; $i<=$n; $i++) {
       echo '<tr>';
       for ($j=1; $j<=$n; $j++) {
           if ($i<$j) {
            echo "<td bgcolor='#00ffff'>";
            echo $affichage;
            echo '</td>';
           }
       }
       echo '</tr>';
    }
    echo '</table>';

}
function coloriagerougehaut($n){
    echo '<table border=1 width=200px height=200px>';
    for ($i=1; $i<=$n; $i++) {
       echo '<tr>';
       for ($j=1; $j<=$n; $j++) {
           if ($i<$j) {
            echo "<td bgcolor='#ff0000'>";
            echo $affichage;
            echo '</td>';
           }
       }
       echo '</tr>';
    }
    echo '</table>';

}
?>