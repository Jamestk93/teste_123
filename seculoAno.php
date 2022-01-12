<?php

$ano = 1901;

function  seculoAno($ano){ 
    $seculo = ceil($ano / 100);
    echo $seculo;
    return;
}

seculoAno($ano);

?>