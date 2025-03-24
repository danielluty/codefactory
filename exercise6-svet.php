<?php
function printData()
{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $hobbies = $_POST["hobbies"];
    $colorClass = (strlen($firstname) > 5) ? 'green' : 'red';
    echo "<div class='result {$colorClass}'>";
    echo "First Name: $firstname<br>";
    echo "Last Name: $lastname<br>";
    echo "Age: $age<br>";
    echo "Hobbies: $hobbies";
    echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User form</title>
    <style>
        .result {
            margin-top: 20px;
            padding: 20px;
            font-weight: bold;
            background-color: wheat;
        }
        .green {
            color: green;
        }
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <form method="POST">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>
        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required><br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>
        <label for="hobbies">Hobbies:</label>
        <input type="text" id="hobbies" name="hobbies"><br><br>
        <button type="submit" name="btn">Submit</button>
    </form>
    <?php
    if (isset($_POST["btn"])) {
        printData();
    }
    ?>
</body>
</html>