<?php
require('config.php');
include("auth_session.php");
$query = "SELECT * FROM users WHERE email = '".$_SESSION['email']."'";
    $result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
<meta charset ="UTF-8">
<meta name="viewpoirt" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!--Bootstrap CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!--Font Awesome  CSS-->
<link rel="stylesheet" href="css/all.min.css">

<!--Google FONT-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

<!--CUSTOM  CSS-->
<link rel="stylesheet" href="css/custom.css">


<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<title>Edit Registration Details</title>
</head>
<style>
#div1{ 
background-image:url(images/bi.JPG); 
height:800px; 
width:100%; 
-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 
} 
.form {
  
  padding: 50px;
  max-width: 600px;
  margin-top: 100px;
  
  border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}
h1{
    margin-left:550px;
}
<style>
    h1 {text-align: center;}
    </style>
<body style="background-color: white"> 
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top"><!--STart navigation-->
<a href="" class="navbar-brand">CASPC</a>
<span class="navbar-text">Customer Happiness and Satisfaction is Our Only Aim</span>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
        <li class="nav-item"><a href="aboutus.php" class="nav-link">About Us</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        </ul>
        </div>
</nav><!--end of navigation bar-->
<div id="div1"> 
  hi there,it is the first image. 
  <?php
$status = "";
if(isset($_POST['submit']) )
{
$name =$_REQUEST['name'];
// $email =$_REQUEST['email'];
$phoneno =$_REQUEST['phoneno'];
$address =$_REQUEST['address'];
$waddress =$_REQUEST['waddress'];
$image = $_FILES['image']['name'];
$target = "upload/".basename($image);
$update="update users set name='".$name."', phoneno='".$phoneno."',address='".$address."',
waddress='".$waddress."', image = '$image' where email = '".$_SESSION['email']."'";
mysqli_query($con, $update);
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
}else {
?>
<div class="form" style="background-color:#FFCDD2" align="center">
<form name="form" method="post" action="" enctype="multipart/form-data"> 
<!-- <input type="hidden" name="new" value="1" /> -->
<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['name'];?>" /></p>
<!-- <p><input type="text" name="email" placeholder="Enter Email"  -->
<!-- required value="<?php echo $row['email'];?>" /></p> -->
<p><input type="text" name="phoneno" placeholder="Enter Phone Number" 
required value="<?php echo $row['phoneno'];?>" /></p>
<p><input type="text" name="address" placeholder="Enter Permanent Address" 
required value="<?php echo $row['address'];?>" /></p>
<p><input type="text" name="waddress" placeholder="Enter Work Address " 
 value="<?php echo $row['waddress'];?>" /></p>
 <input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>

</div> 
<!-- <p><a href="dashboard.php">Dashboard</a>  -->
<!-- | <a href="insert.php">Insert New Record</a>  -->
|

</body>
<!--start footer-->
<footer class="container-fluid bg-dark mt-5 fixed-bottom text-white">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6">
                <span class="pr-2">Follow Us:</span>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
</div>



<div class="col-md-6">
    <small>Designed by CASPC Designers &copy;2021</small>
    <small class="ml-2"><a href="login.php">Admin Login</a></small> 
    </div>
</div>
</div>

            
</div>
</div>
</div>
</footer>


 <!--bootstrap Javascript-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</html>