<?php
include("db.php");

// print_r($_GET);
$id = $_GET['a'];

$query = "DELETE FROM category_tbl WHERE id = $id";

mysqli_query($con, $query);

header("location:view_category.php");

?>