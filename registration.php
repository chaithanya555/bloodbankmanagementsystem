<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenby/3.0/
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
        <style>
/* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}

/* Style the container for inputs */


/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
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
                                                            <li><a href="index.php">Home</a></li>
                                                            <li><a href="registration.php" class="active nav-style">Donor Registration</a></li>
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
					<h4 class="inner-style-w3pvts mr-auto text-wh text-uppercase">Donor Registration</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item" aria-current="page">Donor Registration</li>
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
                                                            <label><b>Donor Name:</b></label>
                                                            <input type="text" name="t1" required="required" class="form-control"  pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" />
							</div>
							<div class="form-group">
                                                            <label><b>Gender:</b></label>
                                                            <input style="width: 10%" name="r1" type="radio" value="male" checked="checked"/>Male<input style="width: 10%" name="r1" type="radio" value="female" />Female
							</div>
                                                        <div class="form-group">
                                                            <label><b>Age:</b></label>
                                                            <input type="number" name="t2" required="required" class="form-control" pattern="[0-9]{2,2}" maxlength="2" title="please enter only  numbers between 2 to 2 for age" />
							</div>
                                                        <div class="form-group">
                                                            <label><b>Mobile No:</b></label>
                                                            <input type="number" name="t3" required="required" class="form-control" pattern="[6789][0-9]{9}" minlength="10" maxlength="10" title="please enter only numbers between 10 to 11 for mobile no." required />
							</div>
                                                        <div class="form-group">
                                                            <label><b>Blood Group:</b></label>
                                                            <select name="t4" class="form-control" required><option value="">Select</option>
<?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?>



</select>
							</div>
                                                        <div class="form-group">
                                                            <label><b>E-Mail:</b></label>
                                                            <input type="email" name="t5" class="form-control" required="required" />
							</div>
                                                        <div class="form-group">
                                                            <label><b>Password:</b></label>
                                                            <input type="password" id="psw" name="t6" required="required" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
							</div>
                                                        <div class="form-group">
                                                            <label><b>Confirm Password:</b></label>
                                                            <input type="password"  name="t7" required="required" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
							</div>
                                                    <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
							<div class="form-group">
                                                            <label><b>Upload pic:</b></label>
								<input type="file" name="t8" />
							</div>
                                                    <button type="submit" name="sbmt" class="btn">Submit</button>
						</form>
					</div>
				</div>
		</div>
	</section>
	<!-- //about -->
<?php
if(isset($_POST["sbmt"])) 
{
    $cn=makeconnection();
    $s="select * from donarregistration where email='".$_POST['t5']."'";
    $result=mysqli_query($cn,$s);
    if($r=mysqli_num_rows($result)){
        echo "<script>alert('Email Id already exists');</script>";
    }else{
$target_dir = "doner_pic/";
$target_file = $target_dir . basename($_FILES["t8"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["t8"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
//aloow certain file formats
	if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t8"]["tmp_name"], $target_file)){
		$cn=makeconnection();
			$s="insert into donarregistration(name,gender,age,mobile,b_id,email,pwd,pic) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] .  "','" . basename($_FILES["t8"]["name"])  ."')";
			
			//$s="INSERT INTO donarregistration(name,gender,age,mobile,b_id,email,pswd,pic) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])"
	$result=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($s>0)
	{
            session_destroy();
            session_start();
            $data=mysqli_fetch_array($result);
            $_SESSION['email']=$_POST['t5'];
            $_SESSION['name']=$_POST['t1'];
	echo "<script>alert('Succesfully Registered ');</script>";
        echo "<script>location.replace('login.php');</script>";
	}
	else
	{
            session_destroy();
            session_start();
            $_SESSION['email']=$_POST['t5'];
            $_SESSION['name']=$_POST['t1'];
            echo "<script>alert('Succesfully Registered ');</script>";
        echo "<script>location.replace('login.php');</script>";
	}
		} else{
			echo "sorry there was an error uploading your file.";
		}	
	
	}
        }
}
?> 
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
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

</html>