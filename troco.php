<?php

print_r(troco(89));


function troco($valor)
{
    $r = [0, 0, 0, 0, 0];
    

    $r[0] = floor($valor / 50);

    $valor = $valor - ($r[0] * 50);
    $r[1] = floor($valor / 20);

    $valor = $valor - ($r[1] * 20);
    $r[2] = floor($valor / 10);

    $valor = $valor - ($r[2] * 10);
    $r[3] = floor($valor / 5);

    $valor = $valor - ($r[3] * 5);
    $r[4] = floor($valor / 2);

    return $r;
}

print_r(trocoSimplificado(89));

function trocoSimplificado($valor){
    $r = [0, 0, 0, 0, 0];
    $notas = [50, 20 , 10, 5, 2];

    for($i=0; $i<count($r); $i++){
        $r[$i] = floor($valor / $notas[$i]);
        $valor -= $r[$i] * $notas[$i];
    }
    return $r;
}