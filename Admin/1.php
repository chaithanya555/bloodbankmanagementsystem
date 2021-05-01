<?php
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"])) 
{
	
	$cn=mysqli_connect("localhost","root","","bloodbank");			

			$s="select *from users where username='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	$data=mysqli_fetch_array($q);
	
	
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["username"]=$_POST["t1"];
		$_SESSION["usertype"]=$data[2];
		$_SESSION['loginstatus']="yes";

header("location:index.php");
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
	

?>