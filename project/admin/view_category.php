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
					<th>Edit</th>
					<th>Delete</th>
				</tr>

				<?php
				$n=1;
				while($data=mysqli_fetch_assoc($result))
				{ ?>
					<tr>
						<td><?php echo $n; ?></td>
						<td><?php echo $data['category_name']; ?></td>
						<td><a href="edit_category.php?key=<?php echo $data['id'] ?>" class="btn btn-info">Edit</a></td>
						<td><a href="delete_category.php?a=<?php echo $data['id'] ?>" class="btn btn-danger">Delete</a></td>
						<!-- 
							href="pagename.php?key=value&key=value&key=value"


							$_GET
						 -->
				<?php 
				$n++;
				}

				?>
			</table>

		</div>
	</div>
</div>

</body>
</html>

