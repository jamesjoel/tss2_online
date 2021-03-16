<?php
$con = mysqli_connect("localhost", "root", "", "tss2");

$query = "SELECT DISTINCT city_state FROM cities";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#state_dd").change(function(){
				var a = $(this).val();

				$.ajax({
					type : "post",
					url : "getcity.php",
					data : { statename : a },
					success : function(rec){
						// alert(rec);
						$("#city_dd").html(rec);
					}
				})
			})
			/*
				id   		$("#id")
				class 		$(".class")
				name 		$("h3")
				attr		$("[src]")
				attr+val  	$("[src='1.jpg']")
				grouping	$("h3, p, #id")

				myself		$(this)

			*/
		})
	</script>
</head>
<body>
<br />
<br />
Select State <select id="state_dd">
				<option>Select</option>
				<?php
				while($data=mysqli_fetch_assoc($result))
				{ ?>
					<option><?php echo $data['city_state']; ?></option>
				<?php
				}
				?>
			</select>
<br />
<br />
<br />
<br />
<br />
Select City <select id="city_dd">
				<option>Select</option>
			</select>
</body>
</html>