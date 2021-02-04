<?php
include("db.php");

print_r($_POST);
// die;
$a = $_POST['name'];
$b = $_POST['cid'];

$query = "UPDATE category_tbl SET category_name = '$a' WHERE id = $b";

mysqli_query($con, $query);

header("location:view_category.php");
// DELETE FROM category_tbl WHERE id = $a;

?>