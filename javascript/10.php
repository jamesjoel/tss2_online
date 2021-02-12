<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		div{
			min-height: 300px;
			width: 1000px; 
			/* 1010 */
			background-color: #93ACED;
			margin: 10px auto;
			text-align: center;
			padding: 15px;

		}
		#main-img{
			height: 300px;
			width: 250px;
			border: 2px solid #000;
			padding: 7px;
			border-radius: 5px;

		}
		.small-img{
			height: 80px;
			width: 80px;
			margin: 5px;
			border: 1px solid #000;
			padding: 4px;
			border-radius: 3px;
		}
	</style>
	<script type="text/javascript">
		function demo1()
		{
			document.getElementById("main-img").setAttribute("src", "1.jpg");
		}
		function demo2()
		{
			document.getElementById("main-img").setAttribute("src", "2.jpg");
		}
		function demo3()
		{
			document.getElementById("main-img").setAttribute("src", "3.jpg");
		}
		function demo4()
		{
			document.getElementById("main-img").setAttribute("src", "4.jpg");
		}
		function demo5()
		{
			document.getElementById("main-img").setAttribute("src", "5.jpg");
		}
	</script>
</head>
<body>
<div>
	<img src="1.jpg" id="main-img" />
	<br />
	<img src="1.jpg" class="small-img" onmouseover="demo1()" />
	<img src="2.jpg" class="small-img" onmouseover="demo2()"/>
	<img src="3.jpg" class="small-img" onmouseover="demo3()"/>
	<img src="4.jpg" class="small-img" onmouseover="demo4()"/>
	<img src="5.jpg" class="small-img" onmouseover="demo5()"/>
</div>
</body>
</html>