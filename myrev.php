<?php include "inc/header.php";
 include "Backend Files/connection.php";?>


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
</style>



<div class="main_bodybg">

<div class="container-fluid">
  <div class="row">



    <div class="col-md-6 offset-md-3">

      <div class="card shadow mb-6" >
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Reviews Written</h6>
        </div>
        <div class="card-body ">


          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Restaurant Name</th>
                <th scope="col">Review</th>
                <th scope="col">Rating</th>
                <th scope="col">Taste</th>
                <th scope="col">Ambiance</th>
                <th scope="col">Service</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

          <?php
          if($_SESSION['user_email']){
            $session_email = $_SESSION['user_email'];
          }


          $query="SELECT * FROM food_review1  WHERE user_email='$session_email'";
            $select_all_reviews = mysqli_query($conn, $query);
            $i=0;
            while ($row = mysqli_fetch_assoc($select_all_reviews) ) {

            $id   = $row['id'];
            $restaurant_name = $row['restaurant_name']   ;
            $review =$row['review']  ;
            $rating = $row['rating'];
            $taste = $row['taste'] ;
            $ambiance = $row['ambiance'];
            $service = $row['service'];
            $i++;


            ?>
            <tr>
              <th scope="row"><?php echo $i; ?></th>

              <td><?php echo $restaurant_name; ?></td>
              <td><?php echo $review; ?></td>
              <td><?php echo $rating; ?></td>
              <td><?php echo $taste; ?></td>
              <td><?php echo $ambiance; ?></td>
              <td><?php echo $service; ?></td>
              <td>  <div class="btn-group">
                <a href="editrev.php?update=<?php echo $id; ?>"  class = " btn btn-primary">Update</a>
                <a href="myrev.php?delete=<?php echo $id; ?>" class = " btn btn-danger" >Delete</a>

              </div>  </td>

            </tr>

            <?php
            }

           ?>







            </tbody>
          </table>




        </div>
      </div>

    </div>

  </div>

</div>

<?php

    if (isset($_GET['delete']) ){
        $id = $_GET['delete'];

        $query = "DELETE  FROM food_review1 WHERE id='$id' ";

        $delete_rev = mysqli_query($conn,$query );

        if (!$delete_rev) {
          die("Query  FAiled" . mysqli_error($conn));
          // code...
        }
        else{
          header("Location: myrev.php");
        }
    }

 ?>


</div>



























<?php include "inc/footer.php"; ?>
