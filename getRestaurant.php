<?php include "Backend Files/connection.php"; ?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$m = $_GET['m'];

$conn = mysqli_connect('localhost','root','','food_review');
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}



$sql="SELECT *  FROM food_review1 WHERE restaurant_name LIKE '".$m."%'";
$result = mysqli_query($conn,$sql);



if($row = mysqli_fetch_array($result)) {
  echo "<table>
  <tr>
  <th>Restaurent Name</th>
  <th>Review</th>
  <th>Rating</th>
  <th>Taste</th>
  <th>Ambiance</th>
  <th>Service</th>
  </tr>";
    echo "<tr>";
    echo "<td>" . $row['restaurant_name'] . "</td>";
    echo "<td>" . $row['review'] . "</td>";
    echo "<td>" . $row['rating'] . "</td>";
    echo "<td>" . $row['taste'] . "</td>";
    echo "<td>" . $row['ambiance'] . "</td>";
    echo "<td>" . $row['service'] . "</td>";
    echo "</tr>";

}

else{
  echo "NO  Suggestions";
}
mysqli_close($conn);
?>
</body>
</html>
