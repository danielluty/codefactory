<?php
if (isset($_POST["btn"])) {

    $name = $_POST["name"];
    $surname = $_POST["surname"];

    if (empty($name)) {
        echo "Please insert your first name as well";
    } else if (empty($surname)) {
        echo "Please insert your surname as well";
    } else {
        echo "Welcome $name $surname";
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
    <form action="" method="POST">
        <input type="text" name="name" id="">
        <input type="text" name="surname" id="">
        <input type="submit" name="btn" value="Submit">
    </form>
</body>

</html>