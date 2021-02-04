<?php
include("db.php");
include("header.php");

$a = $_GET['key'];

$query = "SELECT * FROM category_tbl WHERE id=$a";
$result = mysqli_query($con, $query);

$data = mysqli_fetch_assoc($result);
// print_r($data);


?>
<div class="container mt-5">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="update_category.php" method="post">
				
			<input type="hidden" name="cid" value="<?php echo $data['id']; ?>">
			<div class="card bt-5">
				<div class="card-header">
					<h3>Update Category</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Category Name</label>
						<input type="text" value="<?php echo $data['category_name']; ?>" name="name" class="form-control">
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

