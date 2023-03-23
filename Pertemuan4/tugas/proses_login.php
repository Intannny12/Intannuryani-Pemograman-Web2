<?php

    ob_start();
    session_start();
    ob_end_clean();

    $username=$_POST["username"];
    $password=$_POST["password"];

    if($username=="intan" AND $password=="112233")
    {
        $_SESSION["username"]=$username;
        header("location:dashboard.php");
    }else{
        header("locations:index.php?login_error");
    }
?>