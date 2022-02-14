<?php 
    require('fonction.php');
    $a = rand(1,10);
    $b = rand(1,10);
    echo"Avant permutation: a=". $a . "et b=" . $b ."</p>";
    permutation($a,$b);
    echo"Avant permutation: a=". $a . "et b=" . $b ."</p>";
?>