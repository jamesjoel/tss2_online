<?php
include("db.php");
include("header.php");

$query = "SELECT * FROM category_tbl";

$result = mysqli_query($con, $query);

// $data = mysqli_fetch_assoc($result);

?>


<div class="container mt-5">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<h4>View All Category</h4>
			<table class="table table-bordered table-hover table-striped table-dark">
				<tr>
					<th>S.No.</th>
					<th>Category Name</th>
				</tr>

				<?php
				while($data=mysqli_fetch_assoc($result))
				{
					echo "<tr>";
					echo "<td>".$data['id']."</td>";
					echo "<td>".$data['category_name']."</td>";
					echo "</tr>";
				}

				?>
			</table>

		</div>
	</div>
</div>

</body>
</html>

