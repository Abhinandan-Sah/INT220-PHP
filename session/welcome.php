<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

if(time()- $_SESSION['login_time']>600){//if session is greater than 10 minutes
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

echo "<h1> "."Username: ".$_SESSION['username']."</h1>";
echo "<p>Last Login Time: " . $_SESSION['last_login_time'] . "</p>";

// Update last login time in session
$_SESSION['last_login_time'] = date('Y-m-d H:i:s');
?>

<a href="logout.php">Logout</a>