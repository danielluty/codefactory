<?php
$firstName = $lastName = $age = $hobbies = '';

if (isset($_POST["btn"])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $age = $_POST["age"];
    $hobbies = $_POST["hobbies"];
    $color = strlen($firstName) + strlen($lastName) > 5 ? "green" : "red";
}

// Exercise 6 was written as "inside HTML" - is that necessary?

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 300px;
        }

        label {
            margin-bottom: 3px;
        }

        input {
            margin-bottom: 1rem;
        }

        div {
            width: 300px;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <label for="firstName">First name:</label>
        <input type="text" name="firstName" id="firstName">

        <label for="lastName">Last name:</label>
        <input type="text" name="lastName" id="lastName">

        <label for="age">Age:</label>
        <input type="text" name="age" id="age">

        <label for="hobbies">Hobbies:</label>
        <input type="text" name="hobbies" id="hobbies">

        <input type="submit" value="Submit" name="btn">
    </form>

    <div style="color: <?= $color ?>">
        <p>First name: <?= $firstName ?></p>
        <p>Last name: <?= $lastName ?></p>
        <p>Age: <?= $age ?></p>
        <p>Hobbies: <?= $hobbies ?></p>
    </div>
</body>

</html>

