<?php


$u_review_text = $_POST["review_text"];
$u_r_name= $_POST["r_name"];
$u_r_rating = $_POST["r_rating"];
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
