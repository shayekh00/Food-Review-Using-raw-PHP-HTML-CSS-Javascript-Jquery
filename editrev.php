<?php include "inc/header.php";
      include "Backend Files/connection.php";
 ?>


<div class="main_bodybg">
		<!-- title -->
		<h1 >..</h1>
		<!-- //title -->
		<!-- content -->



		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">


          <?php
            if( isset($_GET['update']) ) {
              $id = $_GET['update'];





              $query="SELECT * FROM food_review1  WHERE id = '$id'";
                $select_all_reviews = mysqli_query($conn, $query);

                while ($row =  mysqli_fetch_assoc($select_all_reviews) ) {

                $id   = $row['id'];
                $restaurant_name = $row['restaurant_name']   ;
                $review =$row['review']  ;
                $rating = $row['rating'];
                $taste = $row['taste'] ;
                $ambiance = $row['ambiance'];
                $service = $row['service'];

                echo $id;
                ?>




              </div>
              <form action=" Backend Files/insert_write_a_review.php " name="review_form" method="post" onsubmit="form_validation()">
                <p class="legend" ></p>
                <h1>Update review</h1>
                <?php echo $id; ?>
                <br>
                <br>

                <div class="input">
                  <textarea name="review_text" cols="50" rows="10" value=""   hint = "Write a review of the restaurant"> <?php echo $review; ?></textarea>


                </div>
                <br>

                <!-- <div class="input">
                  <label for="r_name">Restaurant Name</label>
                  <input type="text" placeholder="Restaurant Name" name="r_name" required />
                  <span class="fa fa-unlock"></span>
                </div>
                <br> -->


                <table>
                  <tr>
                    <div class="input">
                      <td> <label for="r_rating">Restaurant Name</label>  </td>
                      <td><input type="text" placeholder="Restaurant Name" value="<?php echo $restaurant_name; ?>" name="r_name" required /></td>
                      <td><span class="fa fa-unlock"></span></td>
                    </div>
                  </tr>

                  <tr>
                    <div class="input">
                      <td> <label for="r_rating">Rating</label>  </td>
                      <td><input type="number" placeholder="Rating " value="<?php echo $rating; ?>" name="r_rating" required /></td>
                      <td><span class="fa fa-unlock"></span></td>
                    </div>
                  </tr>
                  <tr>
                    <div class="input">
                      <td> <label for="r_rating">Taste</label>  </td>
                      <td><input type="number" placeholder="Rating "  value="<?php echo $taste; ?>" name="r_taste" required /></td>
                      <td><span class="fa fa-unlock"></span></td>
                    </div>
                  </tr>

                  <tr>
                    <div class="input">
                      <td> <label for="r_rating">Ambience</label>  </td>
                      <td><input type="number" placeholder="Ambience Rating"  value="<?php echo $ambiance; ?>" name="r_ambience" required /></td>
                      <td><span class="fa fa-unlock"></span></td>
                    </div>
                  </tr>

                  <tr>
                    <div class="input">
                      <td> <label for="r_rating">Service</label>  </td>
                      <td><input type="number" placeholder="Service Rating"  value="<?php echo $service; ?>"  name="r_service" required /></td>
                      <td><span class="fa fa-unlock"></span></td>
                    </div>
                  </tr>



                </table>


                <!-- <div class="rate">
                  <h4>Rating</h4>
                  <input type="radio" id="star5" name="rate" value="5" />
                  <label for="star5" title="text">5 stars</label>
                  <input type="radio" id="star4" name="rate" value="4" />
                  <label for="star4" title="text">4 stars</label>
                  <input type="radio" id="star3" name="rate" value="3" />
                  <label for="star3" title="text">3 stars</label>
                  <input type="radio" id="star2" name="rate" value="2" />
                  <label for="star2" title="text">2 stars</label>
                  <input type="radio" id="star1" name="rate" value="1" />
                  <label for="star1" title="text">1 star</label>
                </div> -->
                <br>
                <input type="submit" name="submit" class=" btn btn-primary" value="Update Info" style="font-size:15pt;color:white;background-color:maroon;border:4px solid #900C3F;padding:5px">
                <br>
                <br>




              </form>

            </div>
          </div>

        </div>







          <?php    }






            }


            ?>









				</div>
				<form action=" Backend Files/insert_write_a_review.php " name="review_form" method="post" onsubmit="form_validation()">
					<p class="legend" ></p>
          <h1>Write a review</h1>
          <br>
          <br>

					<div class="input">
						<textarea name="review_text" cols="50" rows="10"placeholder="Write a review of the restaurant" hint = "Write a review of the restaurant"></textarea>


					</div>
          <br>

					<!-- <div class="input">
						<label for="r_name">Restaurant Name</label>
						<input type="text" placeholder="Restaurant Name" name="r_name" required />
						<span class="fa fa-unlock"></span>
					</div>
          <br> -->


          <table>
            <tr>
              <div class="input">
                <td> <label for="r_rating">Restaurant Name</label>  </td>
                <td><input type="text" placeholder="Restaurant Name" name="r_name" required /></td>
                <td><span class="fa fa-unlock"></span></td>
              </div>
            </tr>

            <tr>
              <div class="input">
                <td> <label for="r_rating">Rating</label>  </td>
                <td><input type="number" placeholder="Rating " name="r_rating" required /></td>
                <td><span class="fa fa-unlock"></span></td>
              </div>
            </tr>
						<tr>
							<div class="input">
								<td> <label for="r_rating">Taste</label>  </td>
								<td><input type="number" placeholder="Rating " name="r_taste" required /></td>
								<td><span class="fa fa-unlock"></span></td>
							</div>
						</tr>

            <tr>
              <div class="input">
                <td> <label for="r_rating">Ambience</label>  </td>
                <td><input type="number" placeholder="Ambience Rating" name="r_ambience" required /></td>
                <td><span class="fa fa-unlock"></span></td>
              </div>
            </tr>

            <tr>
              <div class="input">
                <td> <label for="r_rating">Service</label>  </td>
                <td><input type="number" placeholder="Service Rating" name="r_service" required /></td>
                <td><span class="fa fa-unlock"></span></td>
              </div>
            </tr>



          </table>


          <!-- <div class="rate">
            <h4>Rating</h4>
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
          </div> -->

          <input type="submit" name="update" class=" btn btn-primary" value="SUBMIT" style="font-size:15pt;color:white;background-color:maroon;border:4px solid #900C3F;padding:5px">
          <br>
          <br>




				</form>

			</div>
    </div>


    <?php

      $session_email = $_SESSION['user_email'];

      if (isset ($_POST['update']) ){

                        $id                 = $row['id'];
                        $restaurant_name    = $row['restaurant_name']   ;
                        $review             = $row['review']  ;
                        $rating             = $row['rating'];
                        $taste              = $row['taste'] ;
                        $ambiance           = $row['ambiance'];
                        $service            = $row['service'];
                        if (empty($restaurant_name) || empty($review )|| empty($rating) ||empty($taste) ||empty($ambiance) ||empty($service) ) {

                              echo "No DATA Found";
                        }
                        else{
                            $queryy= "UPDATE food_review1  SET restaurant_name = '$restaurant_name', review = '$review' , rating ='$rating' , taste='$taste' , ambiance='$ambiance' , service='$service' , user_email='$session_email'  WHERE id ='$id'";

                            $update_user= mysqli_query($conn,$queryy);
                            if (!$update_user) {
                              die("Query Failed" . mysqli_error($conn));
                            }
                            else{
                              header("Location: myrev.php");

                            }
                        }
      }
     ?>


	</div>




<?php include "inc/footer.php"; ?>
