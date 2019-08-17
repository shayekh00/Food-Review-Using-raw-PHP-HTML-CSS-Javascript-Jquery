<<<<<<< HEAD

<?php session_start(); ?>

<?php
if ( !$_SESSION['user_email']) {
  header("Location: ../indexlog.php");
  // code...
}
else if($_SESSION['user_email']){
  echo $_SESSION['user_name'];
}

 ?>

=======
>>>>>>> 3b67f75435b5c872b7312f79ea65e1fc7ae3c415
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <!-- new scripts added by navid starts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- new scripts added by navid ends-->
<<<<<<< HEAD


=======
    
    
>>>>>>> 3b67f75435b5c872b7312f79ea65e1fc7ae3c415
    <!-- <link rel="stylesheet" href="../css/style2.css" type="text/css" media="all" /> -->

    <link href="css/style3.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
<<<<<<< HEAD


    <title style="color: #FFFFFF;" >Food Raven</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #B60138;
}

.topnav a {
  float: left;
  display: block;
  color: #DAF7A6  ;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #FBAF03  ;
  color: black;
}

.topnav a.active {
  background-color:#058D02      ;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <div class="topnav" id="myTopnav">
          <a class="navbar-brand" href="#"> <img src="inc/food_logo2.png" alt="food_logo"></a><h3 style="color: #FFFFFF;" > Food Raven </h3>

        <a href="welcome.php" class="active">Home</a>
        <a href="writerevew.php">Write a Review</a>
        <a href="myreview.php">My Review</a>
        <a href="search.php">Search Restaurant</a>
        <a href="inc/logout.php">Log Out</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>






      <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
      </script>

=======
    

    <title style="color: #FFFFFF;" >Food Raven</title>
    

    <div class="">

      <nav class="navbar navbar-dark"  style="background-color: #B60138;">

        <a class="navbar-brand" href="#"> <img src="inc/food_logo2.png" alt="food_logo"></a><h3 style="color: #FFFFFF;" > Food Raven </h3>
        <ul class="nav-item active">
              <a class="nav-link" href="index.php" style="color: #FFFFFF;" >Home <span class="sr-only">(current)</span></a>
        </ul>

        <ul class="nav-item active">
              <a class="nav-link" style="color: #FFFFFF;" href="login.php">Login</a>
        </ul>

            <ul class="nav-item">
              <a class="nav-link " style="color: #FFFFFF;" href="signup.php">Sign Up</a>
            </ul>

            <ul class="nav-item">
              <a class="nav-link " style="color: #FFFFFF;" href="writerevew.php">Write a Review </a>
            </ul>
            <ul class="nav-item">
              <a class="nav-link " style="color: #FFFFFF;" href="myreview.php">My  Review </a>
            </ul>
           
            <ul class="nav-item">
              <a class="nav-link " style="color: #FFFFFF;" href="Backend Files/logout.php">Logout</a>
            </ul>

     </nav>

    </div>
>>>>>>> 3b67f75435b5c872b7312f79ea65e1fc7ae3c415



  </head>
  <body>
  <script src="Backend Files/script.js"></script>
<<<<<<< HEAD

<!--
  <div class="main_bodybg"></div> -->
=======
 
<!-- 
  <div class="main_bodybg"></div> -->
>>>>>>> 3b67f75435b5c872b7312f79ea65e1fc7ae3c415
