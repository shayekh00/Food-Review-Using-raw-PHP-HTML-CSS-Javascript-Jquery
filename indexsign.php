<?php
include "log/header.php";
require_once "Backend Files/connection.php";
 ?>


 <style media="screen">

 .main_bodybg{

     background: url(images/bg2.jpg) no-repeat center;
     background-size: cover;
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
     -ms-background-size: cover;
     min-height: 100vh;
 }
 .sub-main-w3 form {
     background: #F3D7A6;
     padding: 2em;
     -webkit-box-shadow: 12px 5px 16px 2px rgba(16, 16, 16, 0.18);
     -moz-box-shadow: 12px 5px 16px 2px rgba(16, 16, 16, 0.18);
     box-shadow: 12px 5px 16px 2px rgba(16, 16, 16, 0.18);
     margin: -2.5em 2.5em 2em;
     -webkit-border-radius: 4px;
     -o-border-radius: 4px;
     -ms-border-radius: 4px;
     -moz-border-radius: 4px;
     border-radius: 4px;
 }

     .sub-main-w3 form {
         margin: -2em 1em 1.5em;
         padding: 5em;
     }
     .sub-main-w3 {
         margin: 3vw 5vw;
     }

 .user{
   padding-bottom: 80px;
   padding-left: 20px;
   padding-right: 20px;
   width:400px;
   height:800px;
 }

 </style>


<div class="main_bodybg">
		<!-- title -->
		<h1>...</h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">

				</div>
				<form class ="user"action="Backend Files/signup_backend.php" method="POST">
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

				</form>

			</div>
		</div>

	</div>


<?php include "log/footer.php"; ?>
