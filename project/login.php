<?php
include("header.php")
?>
<div class="container mt-5" style="min-height: 600px;">
	<div class="row mt-5">
		<div class="col-md-6 offset-md-3">
			<div class="card">
				<div class="card-header">
					<h5>User Login</h5>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Username/Email</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Login" class="btn btn-success">
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php")
?>