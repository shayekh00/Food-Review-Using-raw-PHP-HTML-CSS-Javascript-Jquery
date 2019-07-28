<?php

    // $servername = "localhost"; 
    // $username = "root"; 
    // $password = ""; 
    // $database_name= "food_review";
    // $conn = mysqli_connect($servername, $username, $password,$database_name); 

    
    $servername = "localhost"; 
    $username = "id10314187_hungryraven"; 
    $password = "HUNGRYRAVENPASSWORD"; 
    $database_name= "id10314187_food_review";
    $conn = mysqli_connect($servername, $username, $password,$database_name); 

    // $my_email= "shawon@gmail.com";
    // $mypassword = "12345";

    if(isset($_POST['login'])){
        session_start();

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM sign_up WHERE user_email='$email' AND  user_password='$pass'  " ;
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) ==1 ){

            session_start();
            $_SESSION['message']= "You're now logged in.";
            $_SESSION['email']=$email;

            header("location: ../welcome.php");

        }else{
            $_SESSION['message']= "Username/Password combinations incorrect";
        }
    

        
        //     if($email == $my_email &&  $pass == $mypassword){
                    

            //         if(isset($_POST['rememberme'])){
            //         }

            //         setcookie("email",$email, time()+(60*60*7),'/');

            //         session_start();
            //         $_SESSION['email']= $email;
                    
            //         header("location: ../welcome.php");
            //     }
            //     else{
            //         echo "Email or Password is invalid.<br> <a href='../login.php'>Click here</a> to try again";
            //     }

            // }
            
            // else{
            //     header("location: ../login.php");
            //     echo $email;
    
    
    }


?>