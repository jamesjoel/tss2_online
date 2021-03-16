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
					url : "server_demo.php",
					success : function(a){
						$("h2").html(a);
					}
				})
			})

		});

	</script>
</head>
<body>
<button>OK</button>
<h2></h2>
</body>
</html>