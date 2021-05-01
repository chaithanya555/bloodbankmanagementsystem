<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php if(!isset($_SESSION)) { session_start(); }

if($_SESSION['donorstatus']=="")
{
	//header("location:../login.php");
	echo "<script>location.replace('../login.php');</script>";
}
?>

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
//if (!isset($_SESSION['email'])) {
// echo "<script>location.replace('../login.php');</script>";
//}

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
                                                            <li><a href="index.php"  class="active nav-style">Home</a></li>
                                                            <li><a href="chngpwd.php">Change Password</a></li>
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
<?php
$cn=mysqli_connect("localhost","root","","bloodbank");
$first="select * from donarregistration where email='" . $_SESSION["email"] . "'";
$q5=mysqli_query($cn,$first);
$data2=mysqli_fetch_array($q5);
$id=$data2[0];
$name=$data2[1];
	$gender=$data2[2];
	$age=$data2[3];
	$mobile=$data2[4];
$s="select * from donors where id='" . $data2[0] . "'";
$q=mysqli_query($cn,$s);
$data=mysqli_fetch_array($q);
?>
		<!-- banner -->
		<div class="banner_w3lspvt-2">
			<div class="container">
				<div class="d-flex style-w3layouts">
                                    <?php
                                    if($data[0]==$data2[0]){
                                    ?>
					<h4 class="inner-style-w3pvts mr-auto text-wh text-uppercase">Donor Basic Info</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					</ol>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <h4 class="inner-style-w3pvts mr-auto text-wh text-uppercase">Donor Basic Info</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					</ol>
                                        <?php
                                    }
                                    ?>
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
                    <?php
                    if($data[0]==$data2[0]){
                        $do="select * from donors where id='" . $data2[0] . "'";
                        $q6=mysqli_query($cn,$do);
                        $donor=mysqli_fetch_array($q6);
                    ?>
                    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-md-5">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h5>Basic Info</h5>
                </div>
                <div class="panel-body">
                    <table class="table table-condensed">
                        <tr>
                            <td><label>Name</label></td>
                            <td><?= $donor['1']?></td>
                        </tr>
                        <tr>
                            <td><label>Gender</label></td>
                            <td><?= $donor[2]; ?></td>
                        </tr>
                        <tr>
                            <td><label>D.O.B</label></td>
                            <td><?= $donor[4]; ?></td>
                        </tr>
                        <tr>
                            <td><label> Address </label></td>
                            <td><?= wordwrap($donor[5], 26, '<br>'); ?></td>
                        </tr>
                        <tr>
                            <td><label> City </label></td>
                            <td><?= $donor[6]; ?></td>
                        </tr>
                        <tr>
                            <td><label> Donation Date </label></td>
                            <td><?= $donor[7]; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h5>Medical Info</h5>
                </div>
                <div class="panel-body">
                    <table class="table table-condensed">
                        <tr>
                            <td><label>Blood Type</label></td>
                            <td><?= $donor[3]; ?></td>
                        </tr>
                        <tr>
                            <td><label>Statistics</label></td>
                            <td><?= $donor[8]; ?></td>
                        </tr>
                        <tr>
                            <td><label>Temperature</label></td>
                            <td><?= $donor[9]; ?></td>
                        </tr>
                        <tr>
                            <td><label> Pulse </label></td>
                            <td><?= $donor[10]; ?></td>
                        </tr>
                        <tr>
                            <td><label> Blood Pressure </label></td>
                            <td><?= $donor[11]; ?></td>
                        </tr>
                        <tr>
                            <td><label> Weight </label></td>
                            <td><?= $donor[12]; ?></td>
                        </tr>
                        <tr>
                            <td><label> Hemoglobin </label></td>
                            <td><?= $donor[13]; ?></td>
                        </tr>
                        <tr>
                            <td><label> HBsAG </label></td>
                            <td><?= $donor[14]; ?></td>
                        </tr>
                        <tr>
                            <td><label> Aids </label></td>
                            <td><?= $donor[15]; ?></td>
                        </tr>
                        <tr>
                            <td><label> Malaria Smear </label></td>
                            <td><?= $donor[16]; ?></td>
                        </tr>
                        <tr>
                            <td><label> Hematocrit </label></td>
                            <td><?= $donor[17]; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
                        <?php
                        }
                        else{
                        ?>
                        <div class="w3pvt-webinfo_mail_grid_right">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-lg-6">
                            <label class="col-sm-8"><h3>Basic Info</h3></label>
                    <div class="form-group">
                            <label class="col-sm-8">Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" placeholder="First Name" value="<?php echo @$name;  ?>" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-8">Gender</label>
                            <div class="col-sm-4 radio-inline">
                                <input type="radio" value="male" name="sex" checked="true">Male                         
                            </div>
                            <div class="col-sm-4 radio-inline">
                            <input type="radio" value="female" name="sex">Female                          
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-8">Blood Type:</label>
                            <div class="col-sm-8">
                                <select name="b_type" class="form-control">
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">D.O.B</label>
                            <div class="col-sm-8">
                                <input type="date" name="dob" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Address</label>
                            <div class="col-sm-8">
                                <textarea rows="8" name="address" class="form-control" required="true"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">City</label>
                            <div class="col-sm-8">
                                <input type="text" name="city" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Mobile</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" max="10000000000" name="mobile" value="<?php echo @$mobile;  ?>" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Phone</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" max="10000000000" name="phone" class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="col-sm-8"><h3>Medical Info</h3></label>
                        <div class="form-group">
                            <label class="col-sm-4">Date of Donation</label>
                            <div class="col-sm-8">
                                <input type="date" name="don_date" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Statistics</label>
                            <div class="col-sm-8">
                                <input type="text" name="stats" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Temperature</label>
                            <div class="col-sm-8">
                                <input type="decimar" name="temp" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Pulse</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" max="300" name="pulse" value="" class="form-control" required="true"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Blood Pressure</label>
                            <div class="col-sm-8">
                                <input type="text" name="bp" value="" class="form-control" required="true"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Weight</label>
                            <div class="col-sm-8">
                                <input type="decimal" name="weight" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Hemoglobin</label>
                            <div class="col-sm-8">
                                <input type="text" name="hemoglobin" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">HBsAg </label>
                            <div class="col-sm-8">
                                <input type="text" name="hbsag" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Aids </label>
                            <div class="col-sm-8">
                                <input type="text" name="aids" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Malaria Smear </label>
                            <div class="col-sm-8">
                                <input type="text" name="malariaSmear" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Hematocrit </label>
                            <div class="col-sm-8">
                                <input type="text" name="hematocrit" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                    </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4"> </label>
                            <div class="col-sm-12">
                                <button class="btn btn-success" type="submit" name="sbmt" >Save</button>
                            </div>
                        </div>
                    </form>
                        </div>
                    <?php
                    
                    
                    
                    
if(isset($_POST["sbmt"]))
{
	
	$s="INSERT INTO donors(id, fname,sex,b_type,bday,h_address,city,don_date,stats,temp,pulse,bp,weight,hemoglobin,hbsag,aids,malaria_smear,hematocrit,phone,mobile) VALUES ('" . $data2[0] . "','" . $_POST["name"] . "','" . $_POST["sex"] . "','" . $_POST["b_type"] . "','" . $_POST["dob"] . "','" . $_POST["address"] . "','" . $_POST["city"] . "','" . $_POST["don_date"] . "','" . $_POST["stats"] . "','" . $_POST["tempo"] . "','" . $_POST["pulse"] . "','" . $_POST["bp"] . "','" . $_POST["weight"] . "','" . $_POST["hemoglobin"] . "','" . $_POST["hbsag"] . "','" . $_POST["aids"] . "','" . $_POST["malariaSmear"] . "','" . $_POST["hematocrit"] ."','" . $_POST["phone"] . "','" . $_POST["mobile"] .  "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}

                        }
                    ?>
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

</body>

</html>