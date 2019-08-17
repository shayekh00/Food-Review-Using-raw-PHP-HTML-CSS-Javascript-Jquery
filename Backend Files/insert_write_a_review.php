<?php
<<<<<<< HEAD
include "connection.php";
=======
require_once "connection.php";
>>>>>>> 3b67f75435b5c872b7312f79ea65e1fc7ae3c415

$u_review_text = $_POST["review_text"];
$u_r_name= $_POST["r_name"];
$u_r_rating = $_POST["r_rating"];
<<<<<<< HEAD
$u_r_taste = $_POST["r_taste"];
$u_r_ambience = $_POST["r_ambience"];
$u_r_service = $_POST["r_service"];



$sql = "INSERT INTO food_review1 (review,restaurant_name,rating,taste,ambiance,service) VALUES ('$u_review_text','$u_r_name','$u_r_rating','$u_r_taste','$u_r_ambience','$u_r_service')";

//,'$u_r_rating','$u_r_ambience','$u_r_service'

if (mysqli_query($conn, $sql))
    {
        echo "<br>";
        echo " New record created successfully";
        header("Location: ../welcome.php");
    }

else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


?>
=======
$u_r_ambience = $_POST["r_ambience"];
$u_r_service = $_POST["r_service"];

session_start();
$session_email= $_SESSION['email'];

$sql = "INSERT INTO food_review (email,review,restaurant_name,rating,ambiance,service) VALUES ('$session_email','$u_review_text','$u_r_name','$u_r_rating','$u_r_ambience','$u_r_service')";

//,'$u_r_rating','$u_r_ambience','$u_r_service'
 
if (mysqli_query($conn, $sql)) 
    {
        echo "<br>";
        echo " New record created successfully";
    }

else 
    {    
        echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
    }


?>
>>>>>>> 3b67f75435b5c872b7312f79ea65e1fc7ae3c415
