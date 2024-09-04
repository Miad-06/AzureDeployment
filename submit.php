
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "Success! <br>Name: $name <br>Email: $email <br>Message: $message";
}
