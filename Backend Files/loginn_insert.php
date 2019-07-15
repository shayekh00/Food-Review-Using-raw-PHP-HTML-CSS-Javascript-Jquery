<?php
require_once "connection.php";

// if ($_POST ['submit']){
$user_username   = $_POST["user_name"];
$user_email      = $_POST["user_email"];
$user_password   = $_POST["user_password"];
$user_retype     = $_POST["user_retype"];


$sql = "INSERT INTO sign_up (user_name, user_email,user_password ,user_retype )

 VALUES ('$user_username','$user_email', '$user_password' , '$user_retype' )";

if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
}
else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

 ?>
