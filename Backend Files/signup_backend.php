<?php


 if (isset( $_POST ['submit'])){
      $user_username   = $_POST["user_name"];
      $user_email      = $_POST["user_email"];
      $user_password   = $_POST["user_password"];
      $user_retype     = $_POST["user_retype"];


      if($user_password == $user_retype ){
         //create user
         $sql = "INSERT INTO sign_up (user_name, user_email,user_password ,user_retype )

         VALUES ('$user_username','$user_email', '$user_password' , '$user_retype' )";

//insert data and check if connection is ok and data is inserted.
         if (mysqli_query($conn, $sql)) {

            echo "New record created successfully";
               header("Location: ../indexlog.php");

=======

         if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";

            session_start();
            $_SESSION['message']= "You're now logged in.";
            $_SESSION['email']=$user_email;

            header("location: ../welcome.php");


            }
            else {
               echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

      }else{



        
         //failed
         $_SESSION['message']= "The two passwords do not match.";

      }





   }
 ?>
