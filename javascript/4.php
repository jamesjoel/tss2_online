<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var a = document.getElementById("num").value;

			document.getElementById("num2").value = a;
			
		}
	</script>
</head>
<body>
<input type="text" id="num">
<br >
<Br >
<input type="text" id="num2">
<Br >
<Br >

<button onclick="demo()">OK</button>

</body>
</html>