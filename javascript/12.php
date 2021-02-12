<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #000;
			border-radius: 100px;


		}
	</style>
	<script type="text/javascript">
		function demo()
		{
			var a = Math.random()*1000; // 0.547412445
			var b = Math.floor(a);

			var x = Math.random()*600;
			var y = Math.floor(x); // 252px

			var c =  Math.random() * (999999 - 100000) + 100000;
			var d = Math.floor(c);


			// (100000, 999999)


			document.getElementById("box").style.marginTop = y+"px";
			document.getElementById("box").style.marginLeft = b+"px";

			document.getElementById("body").style.backgroundColor = "#"+d;
		}
	</script>
</head>
<body id="body">
<div id="box" onmouseover="demo()"></div>
</body>
</html>