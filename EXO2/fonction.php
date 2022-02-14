<?php 
    $larg = rand(10,30);
    $long = rand(10,30);
    function perimetre($long,$larg){
        return ($long+$larg)*2;
    }
    function diagonale($long,$larg){
        return sqrt(pow($long,2)+pow($larg,2));
    }
    function surface($long,$larg){
        return pow($long*$larg);
    }

?>