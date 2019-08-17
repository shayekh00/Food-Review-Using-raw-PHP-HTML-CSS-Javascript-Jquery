<?php

session_start();
session_destroy();

if(isset( $_COOKIE['email']) and  isset($_COOKIE['pass'] ))
{
    $email= $_COOKIE['email'];
    $pass = $_COOKIE['pass'];

    setcookie('email',$email, time()-1);
    setcookie('password',$email, time()-1);
}

echo "Successfully Logged out.<br> <a href='../login.php'>Click here</a> to Sign in again"

?>