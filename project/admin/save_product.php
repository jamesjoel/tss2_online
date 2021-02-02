<?php

// print_r($_POST);
include("db.php");

// print_r($_FILES);
// die;


$a = $_POST['p_name'];
$b = $_POST['p_price'];
$c = $_POST['p_cate'];
$d = $_POST['p_detail'];
$e = $_POST['p_discount'];



$name = $_FILES['image']['name'];  // 1.jpg   ---------- 124875112244.jpg
/*

	$name = "pooja.jpg";

		array("pooja", "jpg")

*/

$arr = explode(".", $name);
$ext = end($arr);

$new_name = time().".".$ext; // 231452144.jpg


$tmp_name = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];

if($ext == "jpg" || $ext == "png" || $ext == "gif" || $ext == "jpeg")
{
	if($size <= (1024*1024*2)) // 2MB
	{
		move_uploaded_file($tmp_name, "product_images/".$new_name);

		$query = "INSERT INTO product_tbl (product_name, product_price, category, detail, discount, product_img) VALUES ('$a', '$b', '$c', '$d', '$e', '$new_name')";

		mysqli_query($con, $query);
		header("location:view_product.php");
	}
	else
	{
		$_SESSION['msg']="This File size is too large please choose less then 2 MB.";
		header("location: add_product.php");
	}


	
}
else
{
	$_SESSION['msg']="This File type not allowed";
	header("location: add_product.php");
}





/*
	1. when we upload any file we have to change its name to unique name.

	2. when file upload we have to check its extenction (type).

	3. when file upload we have to check its size. (2MB)






*/


?>