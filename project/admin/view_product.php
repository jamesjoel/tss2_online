<?php
include("db.php");
include("header.php");

$query = "SELECT * FROM product_tbl";

$result = mysqli_query($con, $query);

// $data = mysqli_fetch_assoc($result);

?>


<div class="container mt-5">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<h4>View All Products</h4>
			<table class="table table-bordered table-hover table-striped table-dark">
				<tr>
					<th>S.No.</th>
					<th>Product Name</th>
					<th>Price</th>
					<th>Category</th>
				</tr>
				<?php
				while($data = mysqli_fetch_assoc($result))
				{ ?>
					<tr>
						<td><?php echo $data['id']; ?></td>
						<td><?php echo $data['product_name']; ?></td>
						<td><?php echo $data['product_price']; ?></td>
						<td><?php echo $data['category']; ?></td>
					</tr>
				<?php 
				}
				?>
			</table>
		</div>
	</div>
</div>

</body>
</html>

