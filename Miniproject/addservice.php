<?php
require('config.php');
include("auth_session.php");
$query = "SELECT id FROM users WHERE email = '".$_SESSION['email']."'";
    $result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$id=$row["id"];
?>
<?php
if(isset($_POST['submit']))
{
    require('config.php');    
    // get values form input text and number
    $service = $_POST["service"]; 
    // mysql query to insert data
    $query = "INSERT INTO `spserv`(spid,sid) VALUES ('$id','$service')";   
    $result = mysqli_query($con,$query);    
    // check if mysql query successful
    if($result)
    {
        echo 'Data Inserted';
    }    
    else{
        echo 'Data Not Inserted';
    }   
    // mysqli_free_result($result);
    // mysqli_close($connect);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>

		</style>
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

  <title>PHP Retrieve Data from MySQL using Drop Down Menu</title>
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
p.ex1 {
  margin-top: 300px;
  margin-bottom: 100px;
  margin-right: 300px;
  margin-left: 650px;
}
</style>
</head>
<body style="background-color: white"> 
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top"><!--STart navigation-->
<a href="home_sprov.php" class="navbar-brand">CASPC</a>
<span class="navbar-text">Customer Happiness and Satisfaction is Our Only Aim</span>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="home_sprov.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="registration.php" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact Us</a></li>
        <li class="nav-item"><a href="#AboutUs" class="nav-link">About Us</a></li>
        </ul>
        </div>
</nav><!--end of navigation bar-->
<div id="div1"> 
  hi there,it is the first image. 
  <form method = 'post'>

  <p class="ex1">
  Service:
  <select name="service">
    <option>-- Select Service --</option>
    <?php
        include "config.php";  // Using database connection file here
        $records = mysqli_query($con, "SELECT * FROM servicelist");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['id'] ."'>" .$data['service'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
  <input type = 'submit' name = 'submit' value = Submit class='btn btn-success'>
      </p>
 
</form>
</div> 




</body>
<!--start footer-->
<footer class="container-fluid bg-dark mt-5 mb-0  text-white">
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
</html> 
