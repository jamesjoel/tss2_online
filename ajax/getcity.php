<?php
$con = mysqli_connect("localhost", "root", "", "tss2");

$x = $_POST['statename'];

$query = "SELECT * FROM cities WHERE city_state = '$x'";
$result = mysqli_query($con, $query);

while($data = mysqli_fetch_assoc($result))
{
	echo "<option>".$data['city_name']."</option>";
}
?>