<?php

function farToCel($fahrenheit)
{
    $result = ($fahrenheit - 32) * 5 / 9;
    return $result;
}

$celsius = farToCel(35);

echo "$celsius <br>";

switch ($celsius) {
    case $celsius > -1 && $celsius < 6:
        echo "Very cold";
        break;

    case $celsius > 5 && $celsius < 11:
        echo "Cold";
        break;

    case $celsius > 10 && $celsius < 16:
        echo "Pleasant";
        break;

    case $celsius > 15 && $celsius < 21:
        echo "Warm";
        break;

    case $celsius > 20:
        echo "Hot";
        break;
}
