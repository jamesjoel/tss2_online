<?php
include("db.php");
// print_r($_POST);
// 02/21/2021

// 2021-02-21
// die;
$a = $_POST['name'];
$b = $_POST['date'];

$arr = explode("/", $b); // [02, 21, 2021]

$newdate = $arr[2]."-".$arr[0]."-".$arr[1];


$query = "INSERT INTO sale_tbl (sale_name, date) VALUES ('$a', '$newdate')";
mysqli_query($con, $query);
header("location:sales.php");
?>