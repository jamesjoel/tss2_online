<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		a{
			display: inline-block;
			height: 40px;
			width: 40px;
			margin: 10px;
			border : 1px solid #000;
			border-radius: 5px;
		}
	</style>
	<script type="text/javascript">
		function demo1()
		{
			document.getElementById("body").style.backgroundColor = "#DC1F56";
		}
		function demo2()
		{
			document.getElementById("body").style.backgroundColor = "#1FDCAB";
		}
		function demo3()
		{
			document.getElementById("body").style.backgroundColor = "#DC891F";
		}
		function demo4()
		{
			document.getElementById("body").style.backgroundColor = "#1F72DC";
		}
	</script>

</head>
<body id="body">

<a href="#" style="background-color: #DC1F56" onclick="demo1()"></a>
<a href="#" style="background-color: #1FDCAB" onclick="demo2()"></a>
<a href="#" style="background-color: #DC891F" onclick="demo3()"></a>
<a href="#" style="background-color: #1F72DC" onclick="demo4()"></a>

<!-- 

	document.getElementById("").value
	document.getElementById("").innerHTML
	document.getElementById("").style




 -->

</body>
</html>