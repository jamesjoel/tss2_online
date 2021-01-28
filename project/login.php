<?php
include("admin/db.php");
include("header.php");
?>
<div class="container mt-5" style="min-height: 600px;">
	<div class="row mt-5">
		<div class="col-md-6 offset-md-3">
			<form action="auth.php" method="post">
			<div class="card">
				<div class="card-header">
					<h5>User Login</h5>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Username/Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<p class="text-danger text-center">
						<?php
						// the isset() function check a variable is exists or not.
						if(isset($_SESSION['msg']))
						{
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);

						}
						?>
					</p>
				</div>
				<div class="card-footer">
					<input type="submit" value="Login" class="btn btn-success">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<?php
include("footer.php")
?>