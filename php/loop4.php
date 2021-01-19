<?php
// the foreach loop only works an array.

$color = array("red", "green", "blue", "yellow", "black", "white");

// echo $color[3];
// echo $color[4];
// echo $color[5];
// print_r($color);


foreach($color as $x)
{
	//echo $x;
	echo "<br>";
}


$user = array("name"=>"rohit", "age"=>25, "city"=>"indore");

foreach($user as $x => $u)
{
	echo $x." : ".$u; // name : rohit

	echo "<br>";
}




?>