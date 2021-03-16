<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$.ajax({
					type : "get",
					url : "only_call_server.php"
				})
			})
		})
	</script>
</head>
<body>
<button>Delete</button>
</body>
</html>