<?php 

function calcBox($w, $h, $d) {
    $area = $w * $h;
    $volume = $w * $h * $d;

    return [$area, $volume];
}

$result = calcBox(5, 3, 6);

echo "The area of the box is: $result[0]";
echo "<br>The volume of the box is: $result[1]";