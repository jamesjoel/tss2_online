<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
	</style>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				var a = $("#name").val();
				var b = $("#age").val();
				var c = $("#city").val();
				$.ajax({
					type : "post",
					url : "send_rec_server.php",
					data : { a : a, b : b, c : c },
					success : function(rec){
						$("#tab").html(rec);
						$("#name").val("");
						$("#age").val("");
						$("#city").val("");
					}
				})
			});
		})
	</script>
</head>
<body>
Name : <input type="text" id="name">	
<Br />
<Br />
Age : <input type="text" id="age">
<br />
<Br />
City : <select id="city">
			<option>Select</option>
			<option>Indore</option>
			<option>Mumbai</option>
			<option>Pune</option>
		</select>
<br />
<Br />
<button>Add</button>
<br />
<table border="1" id="tab"></table>

</body>
</html>