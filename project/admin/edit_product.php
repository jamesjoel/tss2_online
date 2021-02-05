<?php
include("db.php");
include("header.php");

$query = "SELECT * FROM category_tbl";
$result = mysqli_query($con, $query);

$a = $_GET['pid'];
$query2 = "SELECT * FROM product_tbl WHERE id = $a";
$result2 = mysqli_query($con, $query2);
$data2 = mysqli_fetch_assoc($result2);

?>
<div class="container mt-5">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="update_product.php" method="post" enctype="multipart/form-data">
				
			<input type="hidden" name="pid" value="<?php echo $data2['id']; ?>">
			<div class="card bt-5">
				<div class="card-header">
					<h3>Update Product</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Product Name</label>
						<input value="<?php echo $data2['product_name'] ?>" type="text" name="p_name" class="form-control">
					</div>
					<div class="form-group">
						<label>Product Price</label>
						<input value="<?php echo $data2['product_price'] ?>" type="text" name="p_price" class="form-control">
					</div>
					

					<div class="form-group">
						<label>Product Category</label>
						<select name="p_cate" class="form-control">
							<option>Select</option>
							<?php
							while($data = mysqli_fetch_assoc($result))
							{

								if($data['category_name']==$data2['category'])
								{ ?>
									<option selected><?php echo $data['category_name'] ?></option>

								<?php 
								}else{ ?>
									<option><?php echo $data['category_name'] ?></option>

								<?php 
								}
							 ?>
							<?php 
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<label>Product Detail</label>
						<textarea name="p_detail" class="form-control"><?php echo $data2['detail'];?></textarea>
					</div>
					<div class="form-group">
						<label>Discount</label>
						<input value="<?php echo $data2['discount'] ?>" name="p_discount" type="text" class="form-control">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Update" class="btn btn-primary">
				</div>
			</div>
			</form>

		</div>
	</div>
</div>





</body>
</html>

