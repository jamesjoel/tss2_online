<?php
include("admin/db.php");
$e = $_POST['email'];
$p = $_POST['password'];

$query = "SELECT * FROM user_tbl WHERE username='$e'";

$result=mysqli_query($con, $query);

if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	// print_r($data);
	if($data['password']==$p)
	{
		header("location:my_account.php");
	}
	else
	{
		$_SESSION['msg']="This Password is Incorrect !";
		header("location:login.php");
	}
}
else
{
	$_SESSION['msg'] = "This Username and Password is incorrect !";
	header("location:login.php");
}
?>