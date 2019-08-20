<?php include "inc/header.php"; ?>


<div class="main_bodybg">
		<!-- title -->
		<h1 >..</h1>
		<!-- //title -->
		<!-- content -->




		<div class="container-fluid" >
		  <div class="row">
					<!--  middle stay  card-->
				<div class="col-md-6 offset-md-3"style="color: red">

		<div class="card shadow mb-6">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary"></h6>
			</div>
			<!--  Color of the card-->
			<div class="card text-white bg-info mb-3">

				
				<form action=" Backend Files/insert_write_a_review.php " name="review_form" method="post" onsubmit="form_validation()" >
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
								<td></td>
								<td></td>

								<div class="input">
									<td> <label for="r_rating">Restaurant Name</label>  </td>
									<td><input type="text" placeholder="Restaurant Name" name="r_name" required /></td>
									<td><span class="fa fa-unlock"></span></td>
								</div>

							</tr>

							<tr>
								<td></td>
								<td></td>
								<div class="input">
									<td> <label for="r_rating">Rating</label>  </td>
									<td><input type="number" placeholder="Rating " name="r_rating" required /></td>
									<td><span class="fa fa-unlock"></span></td>
								</div>
							</tr>

							<tr>
								<td></td>
								<td></td>
								<div class="input">
									<td> <label for="r_rating">Taste</label>  </td>
									<td><input type="number" placeholder="Rating " name="r_taste" required /></td>
									<td><span class="fa fa-unlock"></span></td>
								</div>
							</tr>

							<tr>
								<td></td>
								<td></td>
								<div class="input">
									<td> <label for="r_rating">Ambience</label>  </td>
									<td><input type="number" placeholder="Ambience Rating" name="r_ambience" required /></td>
									<td><span class="fa fa-unlock"></span></td>
								</div>
							</tr>

							<tr>
								<td></td>
								<td></td>
								<div class="input">
									<td> <label for="r_rating">Service</label>  </td>
									<td><input type="number" placeholder="Service Rating" name="r_service" required /></td>
									<td><span class="fa fa-unlock"></span></td>
								</div>
							</tr>

							<tr>

								<div class="input">
									<td> <label for="r_rating"></label>  </td>
									<td>................................................................................</td>
									<td><span class=""></span></td>
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

						<input type="submit" name="submit" class=" btn btn-primary" value="SUBMIT" style="font-size:15pt;color:white;background-color:maroon;border:4px solid #900C3F;padding:5px">
						<br>
						<br>




					</form>
				




				</div>
<<<<<<< HEAD
			</div>

		</div>




			</div>
				</div>







=======
				<form action=" Backend Files/insert_write_a_review.php " name="review_form" method="post" onsubmit="form_validation()">
					<p class="legend" ></p>
          <h1>Write a review</h1>
          <br>
          <br>

					<div class="input">
						<textarea name="review_text" cols="50" rows="10"placeholder="Write a review of the restaurant" hint = "Write a review of the restaurant"></textarea>


					</div>
          <br>
<<<<<<< HEAD

=======
          
>>>>>>> 3b67f75435b5c872b7312f79ea65e1fc7ae3c415
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
<<<<<<< HEAD
						<tr>
							<div class="input">
								<td> <label for="r_rating">Taste</label>  </td>
								<td><input type="number" placeholder="Rating " name="r_taste" required /></td>
								<td><span class="fa fa-unlock"></span></td>
							</div>
						</tr>
=======
>>>>>>> 3b67f75435b5c872b7312f79ea65e1fc7ae3c415

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


          <input type="submit" name="submit" class=" btn btn-primary" value="SUBMIT" style="font-size:15pt;color:white;background-color:maroon;border:4px solid #900C3F;padding:5px">
          <br>
          <br>




				</form>

			</div>
    </div>
<<<<<<< HEAD

=======
    
>>>>>>> 3b67f75435b5c872b7312f79ea65e1fc7ae3c415
	</div>
>>>>>>> fa312b597a73245b82b6bb30a81cdcb8c9cc4ab1




<?php include "inc/footer.php"; ?>
