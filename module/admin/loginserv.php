<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
	if(empty($_POST['user']) || empty($_POST['pass'])){
		$error = "Username or Password is Invalid";
	}
	else
	{
		//Define $user and $pass
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		//Establishing Connection with server by passing server_name, user_id and pass as a patameter
		$con = mysqli_connect("localhost", "root", "");
		//Selecting Database
		$db = mysqli_select_db($con, "dblabjarkom");
		//sql query to fetch information of registerd user and finds user match.
		$query = mysqli_query($con, "SELECT * FROM admin WHERE password='$pass' AND username='$user'");
		//$user = $row['username'];
		
		$rows = mysqli_num_rows($query);
		if($rows == 1){
			session_start();
			$_SESSION['login_admin'] = $user;
			header("Location: ?page=home"); // Redirecting to other page
		}
		else
		{
			$error = "Username of Password is Invalid";
		}
		mysqli_close($con); // Closing connection
	}
}
?>