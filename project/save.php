<?php
// print_r($_POST);
$con=mysqli_connect("localhost", "root", "", "tss2");


$a = $_POST['full_name'];
$b = $_POST['username'];
$c = $_POST['pass'];
$d = $_POST['add'];
$e = $_POST['contact'];
$f = $_POST['gender'];
$g = $_POST['city'];

$query = "INSERT INTO user_tbl (full_name, username, password, address, gender, city, contact) VALUES ('$a', '$b', '$c', '$d', '$f', '$g', '$e')";

// the connection stabled for mysql database


mysqli_query($con, $query);

header("location:login.php");
// now fire the query



/*
	Datbase Connection Function

		mysqli_connect("hostname", "username", "password", "databasename");



	SQL ---- Queries

	1. INSERT

		INSERT INTO tablename (colname1, colname2, colname3, .....) VALUES ('val1', 'val2', 'val3')


	2. UPDATE

	3. DELETE

	4. SELECT

*/

?>