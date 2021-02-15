<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			alert();
			setTimeout("demo()", 1000);
		}

		function demo1()
		{
			setTimeout("demo()", 2000); // 1000 = 1 sec
		}
	</script>
</head>
<body>
<button onclick="demo1()">OK</button>
</body>
</html>