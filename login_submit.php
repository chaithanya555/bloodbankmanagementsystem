<?php
include('donor/function.php');
$_SESSION['donorstatus']="";

if(isset($_POST["submit"])) 
{
	
	$cn=makeconnection();			

			$s="select * from donarregistration where email='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			$s2="select * from otp where email='" . $_POST["t1"] . "'";
	$q=mysqli_query($cn,$s);
        $q4=mysqli_query($cn,$s2);
	$r=mysqli_num_rows($q);
        $r4=mysqli_num_rows($q4);
	mysqli_close($cn);
	if($r>0)
	{
            if($r4>0){
            session_start();
$_SESSION["email"]=$_POST["t1"];
$_SESSION['donorstatus']="yes";
//header('location:donor/index.php');
echo "<script>location.replace('donor/index.php');</script>";
            }
            else{
                
            session_start();
            $cn=makeconnection();
            $s8="select * from donarregistration where email='" . $_POST["t1"] . "'";
			
	$q9=mysqli_query($cn,$s8);
	$r9=mysqli_num_rows($q);
	
	$data=mysqli_fetch_array($q9);
	$name=$data[1];
        $em=$data[6];
            $_SESSION['email']=$em;
            $_SESSION['name']=$name;
	echo "<script>alert('otp has sent to your mail id');</script>";
        echo "<script>location.replace('process.php');</script>";
            }
            
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
		echo "<script>location.replace('login.php');</script>";
	}
		
		}	
?>