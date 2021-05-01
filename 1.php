<?php 
$cn=mysqli_connect("localhost","root","","bloodbank");
$q="SELECT * FROM donorregistration";
$r=mysqli_query($cn,$q);
$rowcount=mysqli_num_rows($r);
echo $rowcount;
?>