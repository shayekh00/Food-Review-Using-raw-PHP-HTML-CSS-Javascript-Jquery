<?php


    $my_email= "shawon@gmail.com";
    $mypassword = "12345";

    if(isset($_POST['login'])){

        $email = $_POST['email'];
        $pass = $_POST['password'];
        
        if($email == $my_email &&  $pass == $mypassword){

            if(isset($_POST['rememberme'])){
                setcookie("email",$email, time()+(60*60*7),"../home");
                setcookie("password",$email, time()+(60*60*7));
            
            }


            setcookie("email",$email, time()+(60*60*7),'/');

            session_start();
            $_SESSION['email']= $email;
            
            header("location: ../welcome.php");
        }
        else{
            echo "Email or Password is invalid.<br> <a href='../login.php'>Click here</a> to try again";
        }

    }
    
    else{
        header("location: ../login.php");
        echo $email;
    }


?>