<?php
require_once "connection.php";

$u_review_text = $_POST["review_text"];
$u_r_name= $_POST["r_name"];
$u_r_rating = $_POST["r_rating"];
$u_r_ambience = $_POST["r_ambience"];
$u_r_service = $_POST["r_service"];


$sql = "INSERT INTO food_review (review,uname,rating,ambiance,service) VALUES ('$u_review_text','$u_r_name','$u_r_rating','$u_r_ambience','$u_r_service')";

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