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
<title>Edit Password</title>
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
h1 
    {margin-left:620px;
    }
    .form {
  
  padding: 50px;
  max-width: 600px;
  margin-top: 130px;
  
  border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}
   
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
if(isset($_POST['new']) && $_POST['new']==1)
{
$password =$_REQUEST['password'];
$update="update users set password='" . md5($password) . "' where email = '".$_SESSION['email']."'";
mysqli_query($con, $update);
}else {
?>
<div class="form" style="background-color:#FFCDD2" align="center">
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input type="password" class="login-input" name="password" placeholder="Password">
<p><input name="submit"  type="submit" value="Update" /></p>
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