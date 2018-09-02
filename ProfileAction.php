<?php 
session_start();
?>
<?php 
$VALID_USER=mysql_real_escape_string($_SESSION["VALID_USER"]);

if(isset($_POST['update')
{
	include 'conn.php';
	
	$fname = $_POST['f_name'];
	$lname = $_POST['l_name'];
	$ph = $_POST['p_num'];
	$pass = $_POST['pass'];
	
	// if($type=='for Event Booking')
	// 	$userType = 'User';
	// else if($type=='as a Business Partner')
	// 	$userType = 'Admin';
	// else
	// 	$userType='dummy';
	$update = mysqli_query($con,"UPDATE user SET f_name='$fname', l_name='$lname', contact='$ph', password='$pass' WHERE email='$VALID_USER'");
	if($update)
	{
		$_SESSION['msg'] = 'Sign Up Successfully';
		header("location:myprofile.php");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($con);
		header("location:Dashboard/signup.php");
	}

}
 ?>







<?php
 session_start(); 
 ob_start();

 include("../function/dbconnect.php");
 include("header.php");
?>

<html>
<body>

<?php
if(isset($_SESSION['VALID_USER'])){

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $s=mysql_query("UPDATE tbl_staffs SET username='$username', password='$password' WHERE username='".mysql_real_escape_string($_SESSION["VALID_USER"])."'");

    if ($s)
        { echo "<script type='text/javascript'>alert('Successful - Record Updated!'); window.location.href = 'user_profile.php';</script>"; }
    else
        { echo "<script type='text/javascript'>alert('Unsuccessful - ERROR!'); window.location.href = 'user_profile.php';</script>"; }
}

$query1=mysql_query("SELECT * FROM tbl_staffs WHERE username='".mysql_real_escape_string($_SESSION["VALID_USER"])."'  AND user_levels = '".mysql_real_escape_string('1')."'");
$query2=mysql_fetch_array($query1); 

?>

<form  action="user_profile.php" method="POST">
<div>Your  Profile</div>
<table  border="0"  align="center"  cellpadding="2"  cellspacing="0">
<tr>
<td><div>Username:</div></td>
<td><input type="text" name="username" value="<?php  echo $query2['username'];  ?>" /></td>
</tr>
<tr>
<td><div  align="left"  id="tb-name">Password:</div></td>
<td><input type="text" name="password" value="<?php  echo $query2['password'];  ?>" /></td>
</tr>
</table>
<input type="submit" name="submit" value="Update" />
</form>

<?php
//  close  while  loop
}}
?>

<?php
//  close  connection;
mysql_close();
?>
</br>

</body>
</html>