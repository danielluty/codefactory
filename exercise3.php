<?php

function gradesAverage($grade1, $grade2, $grade3) {
    $sum = $grade1 + $grade2 + $grade3;
    $average = $sum / 3;

    echo $average;
}

gradesAverage(5, 3, 4);