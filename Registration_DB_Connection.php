<?php
include("connection.php");
//error_reporting(0);   //Avoiding errors to print on screen
?>
<?php
if(isset($_POST['submit']))
{
	$fn=$_POST['first_name'];
	$ln=$_POST['last_name'];
	$rn=$_POST['regd_no'];
	$pwd=$_POST['password'];
	$conpwd=$_POST['confirm_password'];
	echo'haha';
	if($pwd == $conpwd)
	{
		echo 'hehe';
		$query="INSERT INTO USERS VALUES ('$fn', '$ln', '$rn', '$pwd')";
		echo 'huhu';
		$data=mysqli_query($conn, $query);
		if($data)
		{
			echo 'hi';//'<script type="text/javascript"> alter("User registered... Go to the login page to login")</script>';
		}
		else
		{
			echo 'hihi';
			echo '<script type="text/javascript"> alter("Error!")</script>';
		}
	}
	else
	{
		echo'nono';
		echo '<script type="text/javascript"> alter("Password doesnot match")</script>';
	}
}
?>