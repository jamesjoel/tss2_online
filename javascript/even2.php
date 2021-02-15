<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo1()
		{
			document.getElementById("txt1").style.backgroundColor = "#7EF2D6";
		}
		function demo2()
		{
			document.getElementById("txt1").style.backgroundColor = "#F27ED2";
		}
	</script>
</head>
<body>
<br>
<br>
<input type="text" onfocus="demo1()" onblur="demo2()" id="txt1">
<br>
<br>
<input type="text">
<br>
<br>
<input type="text">
</body>
</html>