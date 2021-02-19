<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$("button").click(function(){
				alert();
			});

			$("#para1").click(function(){
				alert("welcome");
			});

			$(".text").click(function(){
				alert("hello");
			});

			$("[src='2.jpg']").click(function(){
				alert("sdfgsdfgsdfsdfg");
			})

		});
	</script>
</head>
<body>
<h2>Introcution of jQuery</h2>
<button>OK</button>
<p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


<p id="para1">the stepping stone</p>

<img src="1.jpg" height="300" />
<img src="2.jpg" height="300" />


</body>
</html>