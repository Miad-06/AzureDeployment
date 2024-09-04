<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contract Form</title>
</head>

<body>
    <h2>Contract Form</h2>
    <form action="submit.php" method="POST">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Message: <textarea name="message" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>