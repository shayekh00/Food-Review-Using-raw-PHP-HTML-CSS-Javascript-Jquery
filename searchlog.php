

<?php include "log/header.php"; ?>

<html>
<head>
<script>


</script>
</head>
<body>





  <div class="main_bodybg">
  		<!-- title -->
  		<h1 >..</h1>
  		<!-- //title -->
  		<!-- content -->
  		<div class="sub-main-w3">
<form>



<div class="">


<p>Restaurent Name: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

   <div id="txtHint"><b>Person info will be listed here...</b></div>
</div>



<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getRestaurantlog.php?m="+str, true);
  xhttp.send();
}
</script>


<p>Suggestions: <span id="txtHint"></span></p>




<div class="">

</div>
</div>
</div>
<div class="">

</form>
<br>


</body>
</html>









<?php include "log/footer.php"; ?>
