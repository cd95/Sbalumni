<?php
$servername="localhost";
$username="cd95";
$password="cd41#@das23";
$dbname="blood";
$conn=new mysqli($servername,$username,$password,$dbname);
if (mysqli_connect_errno()) {
 	die("connection failed".mysqli_connect_errno());
 }
?>
<html>
<head>
<title>registration</title></head>
<body>
<?php 
if(isset($_POST['submit']))
{
	$name=$_POST['your_name'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$bg=$_POST['blood'];
	$address=$_POST['address'];
	
		if (empty($name)||empty($gender)||empty($email)||empty($phone)
			||empty($bg)||empty($address))
			 {
			echo "can't leave any field blank";	
		}
		else
		{
			$sql="INSERT INTO reg(name,gender,email,phone,blood,address)";
			$sql.="VALUES('$name','$gender','$email','$phone','$bg','$address')";
			$res=mysqli_query($conn,$sql);
			if(!$res)
			{
				die("query failed".mysqli_error($conn));
			}
			else{
				echo "<script>alert('Thank you for registering!')</script>";
				echo "<script>window.open('home.php','_self')</script>";
			}
		}
}
else
{
	echo "form not submitted properly";
}
?>	
</body>
</html>