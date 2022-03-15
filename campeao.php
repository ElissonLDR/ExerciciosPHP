<?php

print_r(campeao([5, 6, 7], [3, 6, 10])) . PHP_EOL;
print_r(campeao([17, 28, 30], [99, 66, 8])) . PHP_EOL;

function campeao($a, $b)
{

    $placar = [0, 0];

    for ($i = 0; $i < count($a); $i++) {

        if ($a[$i] < $b[$i]) $placar[1]++;

        if ($a[$i] > $b[$i]) $placar[0]++;
    }

    return $placar;
}