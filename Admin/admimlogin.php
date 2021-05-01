<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php if(!isset($_SESSION)) { session_start(); } ?>

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
	<link rel="stylesheet" href="css1/style.css" type="text/css" media="all" />
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
            <?php include('function.php'); ?>
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
                                                            <li><a href="../index.php">Home</a></li>
                                                            <li><a href="../registration.php">Donor Registration</a></li>
                                                            <li><a href="../requests.php">Send Request</a></li>
                                                            <li><a href="../viewrequest.php">View Request</a></li>
                                                            <li><a href="../camp.php">Camps</a></li>
								<li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2 nav-style">Login<span
											class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#" class="nav-style">Login<span class="fa fa-angle-down"
											aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
                                                                            <li><a href="../login.php" class="drop-text">Donor</a></li>
										<li><a href="index.php" class="drop-text">Admin</a></li>
									</ul>
								</li>
                                                            <li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2 nav-style">Search<span
											class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#" class="nav-style">Search<span class="fa fa-angle-down"
											aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<li><a href="group.php" class="drop-text">Blood group</a></li>
										<li><a href="bank.php" class="drop-text">Blood Bank</a></li>
									</ul>
								</li>
								<li><a href="../contact.php" class="nav-style">Contact Us</a></li>
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
					<h4 class="inner-style-w3pvts mr-auto text-wh text-uppercase">Login</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item" aria-current="page">Login</li>
                                                <li class="breadcrumb-item" aria-current="page">Admin</li>
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
						 <form method="post" enctype="multipart/form-data">
							<div class="form-group">
                                                            <label><b>Username:</b></label>
                                                            <input type="text" class="form-control" name="t1" required="required"/>
                                                        </div>
							<div class="form-group">
                                                            <label><b>Password:</b></label>
                                                            <input type="password"name="t2" class="form-control" required="required"   />
                                                        </div>
                                                        
                                                    <button type="submit" name="sbmt" class="btn">Submit</button>
                                                        
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
	<?php include('../footer.php'); ?>
	<!-- //copyright bottom -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center">
		<span class="fa fa-upload" aria-hidden="true"></span>
	</a>
	<!-- //move top icon -->
<?php
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="select *from users where username='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	$data=mysqli_fetch_array($q);
	
	
	mysqli_close($cn);
	if($r>0)
	{
            session_start();
		$_SESSION["username"]=$_POST["t1"];
		$_SESSION["usertype"]=$data[2];
		$_SESSION['loginstatus']="yes";

echo "<script>location.replace('index.php');</script>";
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
	

?> 
</body>

</html>