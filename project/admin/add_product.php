<?php
include("db.php");
include("header.php");

$query = "SELECT * FROM category_tbl";
$result = mysqli_query($con, $query);

?>
<div class="container mt-5">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="save_product.php" method="post">
				
			
			<div class="card bt-5">
				<div class="card-header">
					<h3>Add Product</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Product Name</label>
						<input type="text" name="p_name" class="form-control">
					</div>
					<div class="form-group">
						<label>Product Price</label>
						<input type="text" name="p_price" class="form-control">
					</div>
					<div class="form-group">
						<label>Product Category</label>
						<select name="p_cate" class="form-control">
							<option>Select</option>
							<?php
							while($data = mysqli_fetch_assoc($result))
							{ ?>
								<option><?php echo $data['category_name'] ?></option>
							<?php 
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<label>Product Detail</label>
						<textarea name="p_detail" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Discount</label>
						<input name="p_discount" type="text" class="form-control">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Add" class="btn btn-primary">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>

