<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){

				var a = $("#name").val();
				var b = $("#age").val();
				var c = $("#city").val();
				$.ajax({
					type : "post",
					data : { a : a, b : b, c : c },
					url : "send_server.php"
				})
			})
		})
	</script>
</head>
<body>
	Name : <input type="text" id="name">
	<Br />
	<Br />
	Age : <input type="text" id="age">
	<br />
	<br />
	City : <select id="city">
				<option>Select</option>
				<option>Indore</option>
				<option>Mumbai</option>
				<option>Pune</option>
				<option>Ujjain</option>
			</select>
	<br />
	<br />
<button>Add</button>
</body>
</html>