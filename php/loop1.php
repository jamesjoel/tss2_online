<?php
/*
	=========== Loop in PHP ===============

	the loops are used for repeated code execution for n number of time.


	1. for()

	
	2. while()


	3. do ..... while()


	4. foreach()



----------------------------------- for loop ---------------------

for(init; condition; inc/dec)
{
	your code
}


*/


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Table print by Loop</h2>
<table align="center" border="1" cellspacing="0" cellpadding="5">
	<?php 
	for($a=1; $a<=10; $a++)
	{
		echo "<tr>";
		echo "<td>";
		echo $a*5;
		echo "</td>";
		echo "</tr>";
	}

	?>
</table>
</body>
</html>