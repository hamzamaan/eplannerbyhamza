<?php 
if(isset($_POST['signup']))
{
	include 'conn.php';
	$type = $_POST['type'];
	$f_Name = $_POST['f_name'];
	$l_name =  $_POST['l_name'];
	$contact = $_POST['u_contact'];
	$email = $_POST['u_email'];
	$password = $_POST['u_pass'];
	
	// if($type=='for Event Booking')
	// 	$userType = 'User';
	// else if($type=='as a Business Partner')
	// 	$userType = 'Admin';
	// else
	// 	$userType='dummy';
	$insert = mysqli_query($con, "INSERT INTO `user`(type,f_name,l_name,contact, email, password) VALUES('$type','$f_Name', '$l_name','$contact', '$email', '$password')");
	if($insert)
	{
		$_SESSION['msg'] = 'Sign Up Successfully';
		header("location:dash_login.html");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($con);
		header("location:Dashboard/signup.php");
	}

}
 ?>