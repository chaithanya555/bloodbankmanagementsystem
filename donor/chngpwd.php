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
	//header("location:../login.php");
	echo "<script>location.replace('../login.php');</script>";
}
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
                                                            <li><a href="chngpwd.php"  class="active nav-style">Change Password</a></li>
                                                            <li><a href="updateprofile.php">Update Profile</a></li>
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
					<h4 class="inner-style-w3pvts mr-auto text-wh text-uppercase">Change Password</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item" aria-current="page">Change Password</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- about-->
	<section class="wthree-about py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
                    <div class="col-lg-10 mt-lg-0 mt-5">
					<div class="w3pvt-webinfo_mail_grid_right">
						<form method="post">
                                <div class="form-group" style="padding-bottom: 50px;">
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Old Password<font color="red">*</font>:</label>
                                        <input type="password" class="form-control" name="t2" placeholder="Enter Old Password" required/>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">New Password<font color="red">*</font>:</label>
                                        <input type="password" class="form-control" name="t3" placeholder="Enter New Password" required/>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <label  class="control-label">Confirm Password<font color="red">*</font>:</label>
                                        <input type="password" class="form-control" name="t4" placeholder="Re-enter Password" required/>
                                    </div>
                                </div><br><br>
                                <div style="text-align: center;">
                                    <input type="submit" value="Change" name="sbmt" style="border:0px; background:orangered; width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">
                  
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

	<!-- footer -->
	<?php include('footer.php'); ?>
	<!-- //copyright bottom -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center">
		<span class="fa fa-upload" aria-hidden="true"></span>
	</a>
	<!-- //move top icon -->
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="select *from donarregistration where email='" .$_SESSION["email"] . "' and  pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	
	if($r>0)
	{
	
	$s1="update donarregistration set pwd='" . $_POST["t3"]  ."' where email='" .$_SESSION["email"] ."'";
	mysqli_query($cn,$s1);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";

	}
	else
	{
		echo "<script>alert('Invalid old Password');</script>";
	}
		
		}	
	

?> 
</body>

</html>