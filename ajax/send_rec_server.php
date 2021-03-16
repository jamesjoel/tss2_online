<?php
$con = mysqli_connect("localhost", "root", "", "tss2");
$x = $_POST['a'];
$y = $_POST['b'];
$z = $_POST['c'];

$query = "INSERT INTO student_tbl (name, age, city) VALUES ('$x', '$y', '$z')";
mysqli_query($con, $query);

$query = "SELECT * FROM student_tbl";
$result = mysqli_query($con, $query);
while($data = mysqli_fetch_assoc($result))
{
	echo "<tr>";
	echo "<td>".$data['name']."</td>";
	echo "<td>".$data['age']."</td>";
	echo "<td>".$data['city']."</td>";
	echo "</tr>";
}
?>