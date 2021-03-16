<?php
$con = mysqli_connect("localhost", "root", "", "tss2");

$query = "DELETE FROM student_tbl WHERE id = 2";

mysqli_query($con, $query);

?>