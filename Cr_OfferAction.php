<?php 
if(isset($_POST['create']))
{
	include 'conn.php';
	
	$s_name = $_POST['s_bus'];
	$o_name = $_POST['o_name'];
	$discount = $_POST['discount'];
	$s_date = $_POST['s_date'];
	$e_date=$_POST['e_date'];
	$des=$_POST['description'];
	// if($type=='for Event Booking')
	// 	$userType = 'User';
	// else if($type=='as a Business Partner')
	// 	$userType = 'Admin';
	// else
	// 	$userType='dummy';
	$insert = mysqli_query($con, "INSERT INTO `createoffer`(s_business, O_name,discount, s_date,e_date,description) VALUES('$s_name', '$o_name', '$discount', '$s_date','$e_date','$des')");
	if($insert)
	{
		$_SESSION['msg'] = 'Sign Up Successfully';
		header("location:createoffer.php");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($con);
		header("location:Dashboard/signup.php");
	}

}
 ?>