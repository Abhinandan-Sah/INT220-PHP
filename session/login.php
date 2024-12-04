<?php
session_start();
$d_username = "Avi";
$d_password = "admin";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($d_username==$username && $d_password==$password){
        $_SESSION['username']= $username;
        $_SESSION['login_time']=time();
        $_SESSION['last_login_time']=isset($_SESSION['last_login_time'])? $_SESSION['last_login_time']: "this is your first login";

        header("Location: welcome.php");
        exit();
    }
    else{
        echo "<h2>Invalid Credientials</h2>";
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
    <label for='username'>Username</label>
    <input type="text" name="username" /><br><br>
    <label for='password'>Password</label>
    <input type="password" name="password" /><br><br>
    <button type="submit">submit</button>
    </form>
</body>
</html>