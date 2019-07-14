<?php
require_once "connection.php";

$u_review_text = $_POST["review_text"];

$sql = "INSERT INTO food_review (review) VALUES ('$u_review_text')"; 
 
if (mysqli_query($conn, $sql)) 
    { 
        echo "\r\n New record created successfully";
    }

else 
    {    
        echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
    }


?>