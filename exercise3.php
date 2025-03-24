<?php

function gradesAverage($grade1, $grade2, $grade3)
{
    if (is_numeric($grade1) && is_numeric($grade2) && is_numeric($grade3)) {
        $sum = $grade1 + $grade2 + $grade3;
        $average = $sum / 3;

        echo $sum;
        echo "<br>  $average";
    } else {
        echo "At least one of them is not numeric!";
    }
}

gradesAverage(8, 3, 4);
