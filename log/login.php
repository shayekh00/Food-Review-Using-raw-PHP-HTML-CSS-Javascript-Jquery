<?php
 include "../Backend Files/connection.php";

 session_start();

if (isset($_POST['login'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];

$email  = mysqli_real_escape_string($conn , $email);
$password = mysqli_real_escape_string($conn , $password);
  // code...


  $query = "SELECT * FROM sign_up WHERE user_email = '$email'";
  $Select_user = mysqli_query($conn, $query);

  while ($row = mysqli_fetch_array($Select_user)){
      $_SESSION['user_id']= $row['user_id'] ;
      $_SESSION['user_name']= $row['user_name'] ;
      $_SESSION['user_email']= $row['user_email'] ;
      $_SESSION['user_password']= $row['user_password'] ;

  }

  if ($_SESSION['user_email'] !== $email && $_SESSION['user_password']!==$password){

    header("Location: ../indexlog.php");
  }
  else if ($_SESSION['user_email'] == $email && $_SESSION['user_password']==$password){

    header("Location: ../welcome.php");
  }
  else{
    header("Location: ../indexlog.php");
  }
}

 ?>
