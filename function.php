<?php

# 2 inputs (2 numbers), 1 output sum

function sum($a, $b) {

    $total = $a + $b;
    echo $total;

}


# avg of 6 humbers
# 6 params, 1 output avg

function avg($a, $b, $c, $d) 

{
    $sum = $a + $b + $c + $d;
    $avg = $sum / 4;
    return $avg;
}

$result = avg(4, 5, 3, 6);

echo $result;