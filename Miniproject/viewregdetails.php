<?php 

    require_once("config.php");
    include("auth_session.php");
    $query = "SELECT * FROM users WHERE email = '".$_SESSION['email']."'";
    $result = mysqli_query($con,$query);
    $res = mysqli_query($con,$query);
				$row = mysqli_fetch_assoc($res);
    $servid=$row["service"];
				// echo $servid;
				$query2 = "SELECT service FROM servicelist WHERE id = '$servid'";
				// echo $query2;
				$res2 = mysqli_query($con,$query2);
				$row2 = mysqli_fetch_assoc($res2);
				$servicename= $row2["service"];
				// echo $servicename;

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
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css"/>
		<title> Registration Details </title> 
		<style type="text/css">
		#div1{ 
background-image:url(images/bi.JPG); 
height:800px; 
width:100%; 
-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 
} 
		
				.active{
	   margin-top:400px;
   }
		
		table.t2 {
  margin-top: 100px;
}
	
			#img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
			img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
	   border-radius: 50%;
	   margin-top:150px;
	   margin-left:580px;
	   border: 5px solid #000000;
   }
   a.button {
	background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:150px;
 
}
			
   </style>
	</head> 
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
   

	<table class="table"  style="margin-top:50px;"  bordercolor="#000000" bgcolor="#FFCDD2" align="center" border="10px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="6"><h2>Registration Details</h2>
		<hr height:5px; border: 3px solid black;border-width:3;color:black;background-color:black></th>
		</tr> 
			  <th> Name </th> 
			  <th> Email </th> 
			  <th> Phone No. </th>  
			  <th> Permanent Address </th> 
			  <th> Work Address </th> 
			  <th> Service Provided </th>
		</tr> 
		</div> 
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> 
		<td><?php echo $rows['name']; ?></td> 
		<td><?php echo $rows['email']; ?></td> 
		<td><?php echo $rows['phoneno']; ?></td> 
		<td><?php echo $rows['address']; ?></td> 
		<td><?php echo $rows['waddress']; ?></td>
		<td><?php echo $servicename ?></td> 
        <a href="editregdetails.php" style="margin-top:100px" class="button">EDIT PROFILE</a>
		</tr> 
	<?php 
    echo "<div id='img_div'>";
      	echo "<img src='upload/".$rows['image']."' >";
      echo "</div>";           } 
          ?> 
	</table> 
	<!--start footer-->
<footer class="container-fluid bg-dark mt-5 gixed-bottom text-white">
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
