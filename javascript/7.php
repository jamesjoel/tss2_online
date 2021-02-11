<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 200px;
			width: 200px;
			background-color: #541200;
			border-radius: 100px;
		}
	</style>
	<script type="text/javascript">
		function demo1()
		{
			document.getElementById("box").style.height = "500px";
			document.getElementById("box").style.width = "500px";
			document.getElementById("box").style.borderRadius = "300px";
		}
		function demo2()
		{
			document.getElementById("box").style.height = "200px";
			document.getElementById("box").style.width = "200px";
			document.getElementById("box").style.borderRadius = "100px";
		}
	</script>
</head>
<body>
<button onclick="demo1()">Big</button>
<button onclick="demo2()">Small</button>
<div id="box"></div>
</body>
</html>