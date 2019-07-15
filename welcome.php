<?php include "inc/header.php";
session_start();
echo "Welcome " . $_SESSION['email'];
?>

<?php
// $email="admin";
// $password="admin";

// session_start();
// if(isset($_SESSION['email'])){

// 	echo "<h1>Welcome ".$_SESSION['email']. "</h1>";
// 	echo "<a href='myreview.php'>My Review</a><br>";
// 	echo "<a href='home.php'><input type='button' name=home value=home></a> ";

// }
// else{
// 	if($_POST['email'] == $email && $_POST['password'] == $password ){
// 		$_SESSION['email'] = $email;
//     echo "<script>location.href ='welcome.php'</script>";

// 	}
//   else{
//     echo "<script>alert('email or password incorrect!')";

//     echo "<script>location.href ='login.php'</script>";

//   }
// }

// ?>


<div class="main_bodybg">
		<!-- title -->
		<h1>...</h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">

          <p style="font-size:50px; color:white ; border color: maroon;">Welcome To FooD  RaveN</p>

          <div class="card text-center">
    <div class="card-header">
      Featured by Food Raven
    </div>
    <div class="p-3 mb-2 bg-warning text-dark">

      <div class="card-body " style="border color: limegreen; background color:light orange;">
        <h5 class="card-title ">Exclusive Reviewst</h5>
        <p class="card-text">With supporting taste checkers. The quality of food is juf=dged and rated.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>

    </div>
    <div class="card-footer text-muted">
      Taste of Food
    </div>

  </div>

        ]
			</div>
		</div>
		<!-- //content -->
		<!-- copyright -->

		<!-- //copyright -->
	</div>

  <div class="card-group">

    <div class="card">
      <img src="img/f5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Food Safety</h5>
        <p class="card-text">Food safety is a major issue for each indivuals. They must ensure the afety of food.</p>
      </div>


      <div class="card-footer">
        <small class="text-muted">Last updated 4  days  ago</small>
      </div>
    </div>
    <div class="card">
      <img src="img/f1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Shawarma</h5>
        <p class="card-text">This is the best shawarma in town.  ShawarmaPalace has the best shawarma with cheese and bbq chicken.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 5 Days  ago</small>
      </div>
    </div>
    <div class="card">
      <img src="img/f3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Oven Cooked Pasta</h5>
        <p class="card-text">Arabians restaurant has a delicious ovencooked pasta. You must try it.  </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 2 Days   ago</small>
      </div>
    </div>
  </div>

<?php include "inc/footer.php"; ?>
