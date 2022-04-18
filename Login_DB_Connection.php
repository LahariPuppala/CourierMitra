<?php
include("connection.php");
//require "connection.php";
//error_reporting(0);   //Avoiding errors to print on screen
?>
<?php
		if(isset($_POST['login']))
		{
			$rn=$_POST['user_id'];
			$pwd=$_POST['password'];
			$query="SELECT * FROM USERS WHERE registration_ID='$rn' AND password='$pwd'";
			$data=mysqli_query($conn, $query);
			if(mysqli_num_rows($data)>0)
			{
				echo 'humhum';
				//Valid
				$_SESSION['regd_no']=$regd_no;
				
				header('location:DetailsPage.html');
			}
			else
			{
				echo 'homhom';
				echo '<script type="text/javascript"> alert("Invalid credentials")</script>';
			}
		}
?>