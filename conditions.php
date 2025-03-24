<?php

    // $username = "Leila";

    // if ($username == "Serri" || $username == "Riola" || $username == "Serri" ) {
    //     echo "Hello Admin"; 
    // } elseif ($username == "Leila") {
    //     echo "Hello Marketing";
    // } else {
    //     echo "Hello User";
    // }
    
    $date = date("l");


    // if ($date == "Saturday" || $date == "Sunday") {
    //     echo "Weekend!";
    // } else {
    //     echo "Coding Time!";
    // }

    // switch($date) {
    //     case "Saturday":
    //         echo "Weekend";
    //         break;
        
    //     case "Sunday":
    //         echo "Weekend";
    //         break;
        
    //     default:
    //         echo "Coding";
    //         break;
    // }

    // switch ($variable) {
    //     case 'value':
    //         # code...
    //         break;
        
    //     default:
    //         # code...
    //         break;
    // }


// $user = "John";

// $message = ($user == "John") ? "Hello admin!" : "Hello user!";

// $var1 = 4 > 3;
// $var2 = 4 < 3;
// $var3 = null;
// $var4 = "";

// #elvish operator, checks especially if false
// echo ($var1 ?: "Folse or null");

// echo $var4 ?: "Folse or null";

$varOne = 40;
$varTwo;

echo $varOne ?? "The variable doesnt exist or the value of it is null";
