<?php
include("db.php");
// print_r($_POST);
$a = $_POST['p_name'];
$b = $_POST['p_price'];
$c = $_POST['p_cate'];
$d = $_POST['p_detail'];
$e = $_POST['p_discount'];

$x = $_POST['pid'];

$query = "UPDATE product_tbl SET product_name = '$a', product_price = '$b', category='$c', detail='$d', discount = '$e' WHERE id = $x";
mysqli_query($con, $query);
header("location:view_product.php");

?>