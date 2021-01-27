<?php
include("db.php");
// print_r($_POST);
$a = $_POST['name'];
$query = "INSERT INTO category_tbl (category_name) VALUES ('$a')";
mysqli_query($con, $query);
header("location:view_category.php");
?>