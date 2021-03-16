<?php
include("admin/db.php");
$a = $_POST['username'];

$query = "SELECT * FROM user_tbl WHERE username='$a'";
$result = mysqli_query($con, $query);

echo mysqli_num_rows($result);
?>