<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php if(!isset($_SESSION)) {session_start();}  ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blood Bank</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Food Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
        
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
		rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700&amp;subset=devanagari,latin-ext"
		rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
           <?php

if($_SESSION['email']=="")
{
	header("location:../login.php");
}
?>
<?php include('function.php'); ?>
<?php
			
	$cn=mysqli_connect("localhost","root","","bloodbank");
			$s="select * from donarregistration where email='" . $_SESSION["email"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	
	$data=mysqli_fetch_array($q);
	$name=$data[1];
	$gender=$data[2];
	$age=$data[3];
	$mobile=$data[4];
	$pic=$data[8];
	//echo $name;
	mysqli_close($cn);
	
		
		
	
	

?>
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 pl-2">
					<!-- logo -->
					<div id="logo">
                                            <h1><a href="index.php">Blood Bank</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
                                                            <li><a href="index.php">Home</a></li>
                                                            <li><a href="chngpwd.php">Change Password</a></li>
                                                            <li><a href="updateprofile.php"  class="active nav-style">Update Profile</a></li>
                                                            <li><a href="blooddonated.php">Blood Donated</a></li>
                                                            <li><a href="viewdonations.php">View Donations</a></li>
                                                            <li><a href="viewrequest.php">View Requests</a></li>
                                                            <li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt-2">
			<div class="container">
				<div class="d-flex style-w3layouts">
					<h4 class="inner-style-w3pvts mr-auto text-wh text-uppercase">Update Profile</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item" aria-current="page">Update Profile</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- about-->
	<section class="wthree-about py-5" id="about">
		<div class="container">
                    
                    <div class="col-xs-12">
					<div class="w3pvt-webinfo_mail_grid_right">
						<form method="post">
                                                    <div class="row">
                                
                                    <div class="col-xs-12 col-sm-4">
                                        <img src="../doner_pic/<?php echo @$pic; ?>" style="padding-left:40px"  width="200px" height="200px"/>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Name :</label>
                                        <input type="text" class="form-control" name="t1" placeholder="Enter your Name" value="<?php echo @$name;  ?>" required/>
                                        <label  class="control-label">Age :</label>
                                        <input type="text" class="form-control" name="t2" placeholder="Enter your age" pattern="[0-9]{2,2}" value="<?php echo @$age;?>" required/>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Gender :</label><br>
                                        <input name="r1" type="radio" value="male"  <?php if($gender=="male"){ echo "checked" ;}  ?>>Male<input name="r1"  type="radio" value="female" <?php if($gender=="female"){ echo "checked" ;}  ?> />Female
                                        <br><br><label  class="control-label">Mobile No :</label>
                                        <input type="text" class="form-control" name="t3" placeholder="Enter your mobile number" pattern="[0-9]{10,12}" value="<?php echo @$mobile;?>" required/>
                                    
                                    </div>
                                                    </div>
                                                    <div style="text-align: center;">
                                    <input type="submit" value="Update" name="sbmt" style="border:0px; background:orangered; width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">
                  
                                </div> 
                                
                            </form>
					</div>
				</div>
		</div>
	</section>
	<!-- //about -->

	<!-- services -->
	
	<!-- //services -->

	<!-- team -->
	
	<!-- //team -->

	<!-- testimonials -->
	
	<!-- //testimonials -->

	<!-- more -->
	
	<!-- //more -->
<?php
	
	if(isset($_POST["sbmt"])) 
	{
		$cn=makeconnection();
		
		
					$s="update donarregistration set name='" .$_POST["t1"]. "' ,gender='" .$_POST["r1"]."' , age='" .$_POST["t2"]. "',mobile='" .$_POST["t3"]. "' where email='" .$_SESSION["email"]. "'";
		
$i=mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record update');</script>";
	
}
?> 
	<!-- footer -->
	<?php include('footer.php'); ?>
	<!-- //copyright bottom -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center">
		<span class="fa fa-upload" aria-hidden="true"></span>
	</a>
	<!-- //move top icon -->
 
</body>

</html>