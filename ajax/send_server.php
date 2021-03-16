<?php
$con = mysqli_connect("localhost", "root", "", "tss2");
$x = $_POST['a'];
$y = $_POST['b'];
$z = $_POST['c'];

$query = "INSERT INTO student_tbl (name, age, city) VALUES ('$x', '$y', '$z')";
mysqli_query($con, $query);
?>