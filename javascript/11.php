<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show()
		{
			document.getElementById("pass").setAttribute("type", "text");
		}
		function hide()
		{
			document.getElementById("pass").setAttribute("type", "password");
		}
	</script>
</head>
<body>
<br />
<Br />
Password : <input type="password" id="pass"/>
<button onclick="show()">Show</button>
<button onclick="hide()">Hide</button>
</body>
</html>