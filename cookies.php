<?php
setcookie("testCookie", "John Carter", time()+ 86400*30, "/");
if(isset($_COOKIE['testCookies'])){
    echo $_COOKIE
}


?>