<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.circle{
			height: 50px;
			width: 50px;
			background-color: #000;
			border-radius: 100px;
			position: absolute;
		
		}
		
	</style>
	<script type="text/javascript">
		function make_circle()
		{
			var l = Math.random()*1200;
			l = Math.floor(l);

			var t = Math.random()*700;
			t = Math.floor(t);

			var c =  Math.random() * (999999 - 100000) + 100000;
			var d = Math.floor(c);

			var a = document.createElement("div"); // <div></div>
			a.setAttribute("class", "circle"); // <div class="circle"></div>
			a.setAttribute("onmouseover", "make_circle()"); // <div class="circle" onmouseover="make_circle"></div>

			a.style.left = l+"px";
			a.style.top = t+"px";
			a.style.backgroundColor="#"+d;

			document.getElementById("body").appendChild(a);
		}
	</script>
</head>
<body id="body">
<div class="circle" onmouseover="make_circle()"></div>




</body>
</html>