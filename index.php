<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blood Bank</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Food Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
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
            <?php include('admin/function.php'); ?>
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
                                                            <li><a href="index.php" class="active nav-style">Home</a></li>
                                                            <li><a href="registration.php">Donor Registration</a></li>
                                                            <li><a href="requests.php">Send Request</a></li>
                                                            <li><a href="viewrequest.php">View Request</a></li>
                                                            <li><a href="camp.php">Camps</a></li>
                                                            <li><a href="login.php">Login</a></li>
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
								<li><a href="contact.php" class="nav-style">Contact Us</a></li>
                                                                <li><a href="addcamps.php" class="nav-style">Add Camps</a></li>
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
					<h4 class="inner-style-w3pvts mr-auto text-wh text-uppercase">Welcome</h4>
					
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- about-->
	<section class="wthree-about py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
                    <div class="col-lg-12 mt-lg-0 mt-5">
					<div class="w3pvt-webinfo_mail_grid_right">
						Blood is universally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of blood components are transfused every year. Donate Blood Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.
					</div>
				</div>
                    
                    <div class="quote">
                        <h1>Camps</h1>
				<div class="container">
                
                    
            <?php
$cn=makeconnection();
$s="select * from addcamps";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
            if($data>0)
            {
		if($n%2==0)
		{
		?>
    
    
            <div class="row">
            <?php
			
		}?>
                <div class="col-lg-6" style="padding-bottom: 20px;">
                    <h3 style="color: red;"><?php echo $data[1]; ?></h3><br>
                        <a href="Admin/pic/<?php echo $data[5] ?>"data-lightbox="image-1"> <img src="Admin/pic/<?php echo $data[4] ?>" height="250px" width="460px" style="margin:auto;" /></a><br>
                        <a style="color: red;" href="campgallary.php?cid=<?php echo $data[0];  ?>">View Camp Gallary</a><br>
                        Organised By:<?php echo $data[2]; ?> <br>
                        State:<?php echo $data[8]; ?><br>
                        City:<?php echo $data[10]; ?><br>
                        <p style="padding-left:30px; font-size:16px; font-weight:bold; color: red;"><?php echo $data[2]; ?></p>
                    </div>
                        <?php
        if($n%2==1)
	 {
	 ?>
            </div>
                        <?php
	}
	$n=$n+1;
        }
        else{
            echo 'No Camps';
        }
	}?>
                
            </div>
			</div>
		</div>
            

	</section>
	<!-- //about -->
        <section class="wthree-about py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
                    <div class="col-lg-12 mt-lg-0 mt-5">
                        <h1>News</h1>
                        <div class="blog_posts">

    <marquee direction="up" scrolldelay="300"><table class="table">
            
            <?php
            $cn=mysqli_connect("localhost","root","","bloodbank");
            $s="select * from news";
            $result=mysqli_query($cn,$s);
            $r=mysqli_num_rows($result);
            while($data=mysqli_fetch_array($result))
            {
                
                $f="select * from news";
                $result1=mysqli_query($cn,$f);
                $data1=mysqli_fetch_array($result1);
                   echo "<tr><td>". $data1["title"]."</td><td>".$data["detail"]."</td><td>".$data["mobile"]."</td><td>".$data["mobile"];
                
            }
            echo "</table>";
            ?>
        </table></marquee>  
				 
					 <div class="clear"></div>	
				</div>	
                    </div>
                </div>
            
                    
            

	</section>
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
	<!-- //footer -->
	<a href="#home" class="move-top text-center">
		<span class="fa fa-upload" aria-hidden="true"></span>
	</a>
	<!-- //move top icon -->

</body>

</html>