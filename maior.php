

<?php

echo maior([20, 33.5, 10.8, 50, 5.9, 8]) . PHP_EOL;


function maior($pacotes){
    $maior= 0;
    for($i=0;$i<count($pacotes);$i++){                  
            $maior =  ($pacotes[$i] > $maior) ? $pacotes[$i] : $maior;        
    }
    return $maior;
}

echo maiorMax([4, 75, 54, 20.22, 75.5, 76, 69, 8]) . PHP_EOL;

function maiorMax($pacotes){
    return max($pacotes);
}