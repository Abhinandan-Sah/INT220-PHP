<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Validate the email format
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        //Display the processed data
        echo "Hello, " . $name . "!<br>";
        echo "Your email id is, " . $email . "!";
    }
    else {
        echo "<h2>Invalid email format</h2>";
    }
    
}
else{
    echo "<h2>No form data submitted.</h2>";
}
?>