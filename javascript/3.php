<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function demo1()
		{
			var a = document.getElementById("first_num").value;
			

			var b = document.getElementById("second_num").value;
			
			var x = parseInt(a);
			var y = parseInt(b);

			var c = x+y;

			//alert(c);
			document.getElementById("ans").innerHTML = "Your Ans is : "+c;
		}
		function demo2()
		{
			var a = document.getElementById("first_num").value;
			

			var b = document.getElementById("second_num").value;
			
			var x = parseInt(a);
			var y = parseInt(b);

			var c = x-y;

			document.getElementById("ans").innerHTML = "Your Ans is : "+c;
		}
		function demo3()
		{
			var a = document.getElementById("first_num").value;
			

			var b = document.getElementById("second_num").value;
			
			var x = parseInt(a);
			var y = parseInt(b);

			var c = x*y;

			document.getElementById("ans").innerHTML = "Your Ans is : "+c;
		}
		function demo4()
		{
			var a = document.getElementById("first_num").value;
			

			var b = document.getElementById("second_num").value;
			
			var x = parseInt(a);
			var y = parseInt(b);

			var c = x/y;

			document.getElementById("ans").innerHTML = "Your Ans is : "+c;
		}
		
	</script>
</head>
<body>
<br />
<br />
First Number <input type="text" id="first_num">
<br />
<br />
Second Number <input type="text" id="second_num">
<br />
<br />
<button onclick="demo1()">+</button>
<button onclick="demo2()">-</button>
<button onclick="demo3()">x</button>
<button onclick="demo4()">/</button>


<br />
<h3 id="ans"></h3>

</body>
</html>