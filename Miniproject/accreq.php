<?php 

    require_once("config.php");
    include("auth_session.php");
    $query = "SELECT * FROM users WHERE email = '".$_SESSION['email']."'";
    $result = mysqli_query($con,$query);
    $res = mysqli_query($con,$query);
				$row = mysqli_fetch_assoc($res);
				$id=$row["id"];
				echo $id;
    $sid=$row["service"];
				echo $sid;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
    .container {
  
  left: 0;
  bottom: 0;
  width: 100%;
   
  background-color:dark; 
  margin-top: 5;
   text:white;

}

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
.table{
    margin-top:220px;
    margin-bottom:300px;
}
</style>

		<title> Display Accepted Requests </title> 
       
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
        <li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
        <li class="nav-item"><a href="aboutus.php" class="nav-link">About Us</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        </ul>
        </div>
</nav><!--end of navigation bar-->
<div id="div1"> 
  hi there,it is the first image. 
  <table  class="table"  style="margin-bottom:320px;"  bordercolor="#000000" bgcolor="#FFCDD2" align="center" border="10px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="7" >
			<h2>Service Details</h2>
		<hr height:5px; border: 3px solid black;border-width:3;color:black;background-color:black></th> 
		</tr> 
			  <th> Description </th> 
			  <th> Date </th> 
			  <th> Time </th> 
			  <th> Status </th>
			  <th> View Details </th>
              <th> Send Confirmation </th>
			  <th> Decline </th> 	
			 			  
		</tr> 
        
		<?php 

    require_once("config.php");
				$query = " SELECT * FROM `status` where status='assigned'and sid='$sid' and spid='$id'";
				// echo $query;
    // $query = " select * from status where status='assigned'";
    $result = mysqli_query($con,$query);
    while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> 
        <td><?php echo $rows['description']; ?></td> 
		<td><?php echo $rows['date']; ?></td> 
		<td><?php echo $rows['time']; ?></td> 
		<td><?php echo $rows['status']; ?></td>
		<td><form method = 'post' action="viewconsdetails.php" >
		<input type="hidden" name="cid" value="<?php echo $rows['cid'];?>" /><input type="submit"  name="viewdetails" value ="View Details"></td>
		</form>
        <td><form method = 'post' action="" >
  <textarea name="conf" id="conf" rows="4" cols="10" ></textarea>
		<input type="hidden" name="rid" value="<?php echo $rows['reqid'];?>" /><input type="submit"  name="giveconf" value ="Submit">
		</form>
		<td><form method = 'post' >
		<input type="hidden" name="rid" value="<?php echo $rows['reqid'];?>" /><input type="submit"  name="decline" value ="Decline">
                <!-- <input type="submit" name="decline" value="Decline"> -->
               </form> 
		</tr> 
	<?php 
               } 
          ?> 
	</table> 
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



 <!--bootstrap Javascript-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
	</html>
	<?php
if(isset($_POST['decline']))
{
    require('config.php');    
    $status="declined"; 
				$query = "UPDATE `status` SET status = '$status', spid='0' where reqid='".$_POST['rid']."'";
				// echo $query;
    $result = mysqli_query($con,$query);    
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
<?php
if(isset($_POST['rid']))
{
$conf =$_REQUEST['conf'];
require_once("config.php");
$update="UPDATE `status` SET conf='".$conf."' WHERE reqid='".$_POST['rid']."'";
echo $update;
mysqli_query($con, $update);
}
else {
// echo "Data not inserted";
 } ?>