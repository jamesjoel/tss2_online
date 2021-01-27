<?php

// print_r($_POST);
include("db.php");


$a = $_POST['p_name'];
$b = $_POST['p_price'];
$c = $_POST['p_cate'];
$d = $_POST['p_detail'];
$e = $_POST['p_discount'];


$query = "INSERT INTO product_tbl (product_name, product_price, category, detail, discount) VALUES ('$a', '$b', '$c', '$d', '$e')";

mysqli_query($con, $query);

header("location:view_product.php");

?>