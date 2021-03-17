<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container mt-5" style="min-height: 600px;">
	<div class="row mt-5">
		<div class="col-md-6 offset-md-3">
			<form action="<?php echo site_url('admin/auth')?>" method="post">
			<div class="card">
				<div class="card-header">
					<h5>Admin Login</h5>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Username/Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" class="form-control">
					</div>
					<p class="text-danger text-center"><?php echo $this->session->flashdata("msg");?>
					</p>
				</div>
				<div class="card-footer">
					<input type="submit" value="Login" class="btn btn-success">
				</div>
			</div>
		</div>
	</form>
	</div>
</div>
</body>
</html>