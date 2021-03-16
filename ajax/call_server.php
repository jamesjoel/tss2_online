<?php
$con = mysqli_connect("localhost", "root", "", "tss2");
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