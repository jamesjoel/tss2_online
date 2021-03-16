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

				$.ajax({
					type : "get",
					url : "call_server.php",
					success : function(rec){
						$("table").html(rec);
					}
				})
			})
		})
	</script>
</head>
<body>
	
<button>Show</button>

	<table border="1"></table>


</body>
</html>