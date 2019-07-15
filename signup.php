<?php
include "inc/header.php";
require_once "Backend Files/connection.php";
 ?>


<div class="main_bodybg">
		<!-- title -->
		<h1>...</h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">

				</div>
				<form action="Backend Files/loginn_insert.php" method="POST">
					<p class="legend"></p>
          <h1>Sign Up Here</h1>
          <br>
					<div class="input">
						<label for="name">Name</label><br>
						<input type="text" placeholder="Name" name="user_name" required />
						<span class="fa fa-user"></span>
					</div>
          <br>
					<div class="input">
						<label for="email">Email</label><br>
						<input type="email" placeholder="Email" name="user_email" required />
						<span class="fa fa-envelope"></span>
					</div>
          <br>
					<div class="input">
						<label for="password">Password</label><br>
						<input type="password" placeholder="Password" name="user_password" required />
						<span class="fa fa-unlock"></span>
					</div>
          <br>
					<div class="input">
						<label for="retype">Re-type</label><br>
						<input type="password" placeholder="Re-type" name="user_retype" required />
						<span class="fa fa-unlock"></span>
					</div>

          <br>
          <br>
          <input type="submit" name="submit" class=" btn btn-primary" value="SUBMIT" style="font-size:15pt;color:white;background-color:maroon;border:4px solid #900C3F;padding:5px">
          <br>
          <br>
						<span class="fa fa-sign-in"></span>
					</button><br>
					<div class ="form-group">
						<input type ="submit" name ="register"
						value =" Sign up with Goooogle " class ="btn btn-primary" style="font-size:15pt;color:white;background-color:limegreen;border:4px solid #006400;padding:5px">
							<i class="fa fa-google" aria-hidden="true"></i><br>
					</div>
					<div class ="form-group">
						<input type ="submit" name ="register"
						value =" Sign up with Facebook " class ="btn btn-primary" style="font-size:15pt;color:white;background-color:darkslateblue;border:4px solid #140466;padding:5px">
							<span class="fa fa-facebook-square"></span>
					</div>
				</form>

			</div>
		</div>
		<!-- //content -->
		<!-- copyright -->

		<!-- //copyright -->
	</div>




<?php include "inc/footer.php"; ?>
