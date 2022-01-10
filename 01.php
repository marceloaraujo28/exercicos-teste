<?php

function Seculoano($ano){
    echo "Ano ".$ano. " = Século " . ceil($ano / 100). "<br>";
}

Seculoano(1905);
Seculoano(1700);

?>