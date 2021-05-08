
<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
// $strSQL = "SELECT * FROM users WHERE email = '".$_SESSION['email']."'";
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





<title>ADMIN HOME PAGE</title>
</head>
<body>



<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top"><!--STart navigation-->
<a href="home_admin.php" class="navbar-brand">CASPC</a>
<span class="navbar-text">Customer Happiness and Satisfaction is Our Only Aim</span>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="home_admin.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        </ul>
        </div>
</nav><!--end of navigation bar-->

<!--Start header Jumbotron-->
<header class="jumbotron back-image" style="background-image:url(images/admin.JPG); margin-top:30px">
<!--sidebar-->
<div class="container-fluid" style="height:100%">
    <div class="row ">
        <div class="col-sm-1 bg-dark sidebar py-5 ">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">

                    <li class="nav-item"><a class="nav-link"
                href="profile.php"><i class="fas fa-user fa-4x" style="margin-left:0px"></i>Profile</a></li>

                <li class="nav-item"><a class="nav-link"
                href="servlist.php"><i class="fab fa-accessible-icon fa-4x"></i> Service List</a></li>

                <li class="nav-item"><a class="nav-link"
                href="dispuser.php"><i class="fas fa-history fa-4x"></i>User List</a></li>

                <!-- <li class="nav-item"><a class="nav-link" -->
                <!-- href="logout.php"><i class="fas fa-user fa-8x"></i>Logout</a></li> -->
</div>


</div><!--end side bar-->
</header><!--end header jumbotron-->



   <!-- <?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
// $strSQL = "SELECT * FROM users WHERE email = '".$_SESSION['email']."'";
?>
<!--<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Consumer Home</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['email']; ?>!</p>
        <p>You are in consumer dashboard page.</p>
</div>
        <!--<p><a href="profile.php">Profile</a></p>
        <p><a href="browse_ser.php">Browse Services</a></p>
        <p><a href="cserhist.php">Service History</a></p>
        <p><a href="logout.php">Logout</a></p>
    </div>-->
<!--bootstrap Javascript-->






<!--Contact us form-->
<!-- <div class="container" id="Contact"> -->
    <!-- <h2 class="text-center mb-4">Contact Us</h2> -->
    <!-- <div class="row"> -->
        <div class="col-md-8"><!--Start of first column-->
        <!-- <form action="" method="POST"> -->
            <!-- <input type="text" class="form-control"name="name" placeholder="Name"><br> -->
            <!-- <input type="text" class="form-control"name="subject" placeholder="Subject"><br> -->
            <!-- <input type="text" class="form-control"name="email" placeholder="Email"><br> -->
            <!-- <textarea class="form-control" name="message" placeholder="How can We Help You...?" style="height:150px;"></textarea><br> -->
            <!-- <input type="submit" class="btn btn-danger" name="submit"value="Send"<br> -->
<!-- </form> -->
</div><!--End First Column-->


            
</div>
</div>
</div>

<!--start footer-->
<footer class="container-fluid bg-dark mt-5 text-white">
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
</footer>



<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>

</body>
</html>