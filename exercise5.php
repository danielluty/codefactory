<?php

function calcHoursFromMinutes($minutes) {
    $hr = floor($minutes / 60);
    $min = $minutes % 60;
    
    echo "$minutes minutes = $hr hour(s) and $min minute(s).";
}

calcHoursFromMinutes(650);