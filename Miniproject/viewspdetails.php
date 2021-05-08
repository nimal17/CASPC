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
		<title> View sp details </title> 
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
	table.t2 {
  margin-top: 250px;
}
</style>
<body style="background-color: white">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top"><!--STart navigation-->
<a href="home_cons.php" class="navbar-brand">CASPC</a>
<span class="navbar-text">Customer Happiness and Satisfaction is Our Only Aim</span>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="home_cons.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
        <li class="nav-item"><a href="aboutus.php" class="nav-link">About Us</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        </ul>
        </div>
</nav><!--end of navigation bar-->
<div id="div1"> 
  hi there,it is the first image. 

	<table class="table"  style="margin-top:250px;"  bordercolor="#000000" bgcolor="#FFCDD2" align="center" border="10px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Service Provider Details</h2>
		<hr height:5px; border: 3px solid black;border-width:3;color:black;background-color:black></th>
		</tr> 
                    <th> Name </th>
					<th> Email </th>
					<th> Phone Number </th> 
			        <th> Work Address </th> 	  
		</tr> 
        </div> 
		<?php 
    if(isset($_POST['spid']))
    { 
    require_once("config.php");
    $query = " SELECT * FROM `users` where id='".$_POST['spid']."'";
				// echo $query;
    $result2 = mysqli_query($con,$query);
     while($rows=mysqli_fetch_assoc($result2)) 
		{ 
		?> 
		<tr> 
        <td><?php echo $rows['name']; ?></td>
		<td><?php echo $rows['email']; ?></td>
		<td><?php echo $rows['phoneno']; ?></td> 
		<td><?php echo $rows['waddress']; ?></td> 
		</tr> 
	 <?php 
  } 
             } 
          ?> 
	</table> 
	


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

	</body> 
	</html>
 <?php
/*if(isset($_POST['rid']))
// {
    require('config.php');    
    $status='finished'; 
				// echo $status;
				// $rid=$_GET['rid'];
				// $rid=$_REQUEST['rid'];
		  // echo $rid;
				//$reqid= $rows['reqid'];				
				$query = "UPDATE `status` SET status = '$status' where reqid='".$_POST['rid']."'";
    $result = mysqli_query($con,$query); 
				// echo $query;
				// echo $result;   
    if($result)
    {
        echo 'Data Inserted';
    }    
    else{
        echo 'Data Not Inserted';
    }   
    // mysqli_free_result($result);
    // mysqli_close($connect);
// }
?> */
