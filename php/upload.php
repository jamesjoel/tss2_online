<?php
// $arr = array("a"=>array("x"=>"red", "y"=>"blue", "z"=>"black"));

// echo $arr["a"]["x"];
// echo $arr["a"]["y"];
// echo $arr["a"]["z"];

// print_r($_FILES);

$a = $_FILES['photo']['name'];
$b = $_FILES['photo']['tmp_name'];

move_uploaded_file($b, "demo/".$a);



/*
	$_FILES['photo']['name']   		----------------- full name of upload file


	$_FILES['photo']['size']		----------------- upload file size in 'bytes'


	$_FILES['photo']['type']		----------------- upload file type like (image/jpg, image/													png, video/mp4, text/pdf etc.)


	$_FILES['photo']['error'] 		----------------- 1, 2, 3, 4, 5, 0



	$_FILES['photo']['tmp_name'] 	----------------- 	uploaded file path of server (temp 														folder path)



	1 GB = 1024 MB

	1 MB = 1024 KB

	1 KB = 1024 bytes


	2*1024*1024 




*/

?>