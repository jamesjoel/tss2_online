<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.circle{
			height: 50px;
			width: 50px;
			background-color: #000;
			position: absolute;
			border-radius: 100px;
		}
	</style>
	<script type="text/javascript">
		var l = 0;
		function start()
		{
			var a = document.createElement("div");
			var c =  Math.random() * (999999 - 100000) + 100000;
			var d = Math.floor(c);

			l = l+10;

			a.setAttribute("class", "circle");
			a.style.left = l+"px";
			a.style.backgroundColor="#"+d;


			document.getElementById("body").appendChild(a);
			setTimeout("start()", 50);
		}
	</script>
</head>
<body id="body">
<div class="circle" onclick="start()"></div>
</body>
</html>