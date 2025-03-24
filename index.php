<?php

if (isset($_POST["btn"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    if (empty($fname) || empty($lname)) {
        echo "All inputs need to be filled";
    } else {
        echo "Hello $fname $lname";
    }
}

# inputs fname lname, output message (Hello fname lname)

function printHello($fname, $lname)
{
    if (empty($fname) || empty($lname)) {
        echo "All inputs need to be filled";
    } else {
        echo "Hello $fname $lname";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="fname" id="">
        <input type="text" name="lname" id="">
        <input type="submit" name="btn" value="Send">
    </form>

    <?php
    printHello("Daniel", "Luty");
    ?>
</body>

</html>