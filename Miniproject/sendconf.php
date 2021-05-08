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
		<title> View cons details </title> 
	</head> 
	<style>
	table.t2 {
  margin-top: 200px;
}
</style>
<body style="background-color: white"> 
	<nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top"><!--STart navigation-->
<a href="index.php" class="navbar-brand">CASPC</a>
<span class="navbar-text">Customer Happiness and Satisfaction is Our Only Aim</span>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="registration.php" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact Us</a></li>
        <li class="nav-item"><a href="#AboutUs" class="nav-link">About Us</a></li>
        </ul>
        </div>
</nav><!--end of navigation bar-->
		<?php 
    if(isset($_POST['cid']))
    { 
    require_once("config.php");
    $query = " SELECT * FROM `users` where id='".$_POST['cid']."'";
				// secho $query;
    $result2 = mysqli_query($con,$query);
     while($rows=mysqli_fetch_assoc($result2)) 
		{ 
		?> 
		<tr> 
  <td><?php echo $rows['id']; ?></td>
  <td><?php echo $rows['name']; ?></td>
		<td><?php echo $rows['email']; ?></td>
		<td><?php echo $rows['phoneno']; ?></td> 
		<td><?php echo $rows['address']; ?></td> 
		</tr> 
	 <?php 
  } 
             } 
          ?> 
	</table> 
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
