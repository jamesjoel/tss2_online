<?php
include("admin/db.php");
$e = $_POST['email'];
$p = $_POST['password'];

// check username is exsts or not in database by select query
$query = "SELECT * FROM user_tbl WHERE username='$e'";

$result=mysqli_query($con, $query);

if(mysqli_num_rows($result)==1) // the username is correct
{
	$data = mysqli_fetch_assoc($result);
	// print_r($data);
	if($data['password']==$p)
	{
		$_SESSION['id']=$data['id'];
		$_SESSION['name']=$data['full_name'];
		$_SESSION['is_user_logged_in']=true;

		header("location:my_account.php");
	}
	else
	{
		$_SESSION['msg']="This Password is Incorrect !";
		header("location:login.php");
	}
} 
else // the username is not correct
{
	$_SESSION['msg'] = "This Username and Password is incorrect !";
	header("location:login.php");
}
?>