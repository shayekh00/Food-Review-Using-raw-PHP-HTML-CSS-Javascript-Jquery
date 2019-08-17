<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database_name= "food_review";

// $servername = "localhost"; 
// $username = "id10314187_hungryraven"; 
// $password = "HUNGRYRAVENPASSWORD"; 
// $database_name= "id10314187_food_review";
 
// Create connection 
$conn = mysqli_connect($servername, $username, $password,$database_name); 
 
// Check connection 
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully"; 

?>