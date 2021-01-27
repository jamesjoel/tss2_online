<?php

header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');  
$con = mysqli_connect("localhost", "root", "", "tss2");
$query = "SELECT * FROM demo_tbl";

$result = mysqli_query($con, $query);

$arr=array();

while($data=mysqli_fetch_assoc($result))
{
	$arr[]=$data;
}

echo json_encode($arr);
?>