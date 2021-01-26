<?php
include("header.php");
?>
<div class="container mt-5">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="save_product.php" method="post">
				
			
			<div class="card bt-5">
				<div class="card-header">
					<h3>Add Category</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Category Name</label>
						<input type="text" name="p_name" class="form-control">
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

