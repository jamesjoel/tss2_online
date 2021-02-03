<?php
include("db.php");

// print_r($_GET);
$id = $_GET['pid'];

$query = "DELETE FROM product_tbl WHERE id = $id";

mysqli_query($con, $query);
header("location:view_product.php");

?>