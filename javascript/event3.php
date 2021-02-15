<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		input{
			width: 150px;
		}
	</style>
	<script type="text/javascript">
		var a = 150;
		function demo()
		{
			a = a+5;
			document.getElementById("txt").style.width = a+"px";
		}
	</script>
</head>
<body>
<br>
<br>
<input type="text" onkeydown="demo()" id="txt">
</body>
</html>