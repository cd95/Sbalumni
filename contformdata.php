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
	
	$email=$_POST['email'];
	$sub=$_POST['sub'];
	$mes=$_POST['mes'];
	
		if (empty($name)||empty($email)||empty($sub)
			||empty($mes))
			 {
			echo "can't leave any field blank";	
		}
		else
		{
			$sql="INSERT INTO cont(name,email,sub,mes)";
			$sql.="VALUES('$name','$email','$sub','$mes')";
			$res=mysqli_query($conn,$sql);
			if(!$res)
			{
				die("query failed".mysqli_error($conn));
			}
			else{
				echo "<script>alert('Thank you for writing to us!')</script>";
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