<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    echo "Hello, " . $name . "!<br>";
    echo "Your email id is, " . $email . "!";
} else {
    echo "Please submit the form.";
}
?>