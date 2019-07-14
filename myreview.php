<?php include "inc/header.php";

require_once "Backend Files/connection.php";
// // $query = "select * from food_review" ;
// // $result = mysql_query($query);

$con=mysqli_connect("localhost","root","","food_review");
$result=mysqli_query($con,"select * from food_review");


?>

<div class="main_bodybg">
		<!-- title -->
		<h1 >..</h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">

        </div>
        

        <table>
          <!-- <tr>
            <th>Restaurant Name: </th>
            <th>Review:</th>
            <th>Rating</th>
            <th>Ambiance</th>
            <th>Service</th>
          </tr> -->

          <?php



          // $row = $result->fetch_assoc();

          // print $row["restaurant_name"];
          // print "\n";
          // print $row["rating"];


          ?>
        </table>



				<form action="#" method="post">

					<p class="legend" ></p>
          <h1>My Reviews</h1>
          <br>
          <br>

          
          <table>

          

          <?php

            //$row = mysqli_fetch_assoc($result);

            $query = "SELECT * from food_review";

            if ($result = mysqli_query($con, $query)) {

              /* fetch associative array */
              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <table>
                  <tr>
                    <td>Restaurant Name:</td>
                    <td><?php  printf ("%s\n", $row["restaurant_name"]);?></td>
                  </tr>

                  <tr>
                    <td>Rating:</td>
                    <td><?php  printf ("%s\n", $row["rating"]);?></td>
                  </tr>

                  <tr>
                    <td>Ambiance:</td>
                    <td><?php  printf ("%s\n", $row["review"]);?></td>
                  </tr>

                  <tr>
                    <td>Rating:</td>
                    <td><?php  printf ("%s\n", $row["ambiance"]);?></td>
                  </tr> 

                  <tr>
                    <td>Rating:</td>
                    <td><?php  printf ("%s\n", $row["service"]);?></td>
                  </tr>

                  <br>
                  <br>
                  <br>

                </table>

                
                <?php
                  
              }
              
              /* free result set */
              mysqli_free_result($result);
          }


            

          ?>

          </table>



          <br>
          <br>
          <br>
          <br>
          <input type="submit" name="submit" class=" btn btn-primary" value="Update" style="font-size:15pt;color:white;background-color:maroon;border:4px solid #900C3F;padding:5px">
          <br>
          <br>
          <input type="submit" name="submit" class=" btn btn-primary" value="Cancel" style="font-size:15pt;color:white;background-color:maroon;border:4px solid #900C3F;padding:5px">
          <br>
          <br>




				</form>

			</div>
		</div>
		<!-- //content -->
		<!-- copyright -->

		<!-- //copyright -->
	</div>




<?php include "inc/footer.php"; ?>
