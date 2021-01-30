<?php
include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>
<body>
	<div class="container mt-4">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="auth.php" method="post">
				<div class="card mt-4">
					<div class="card-header">
						<h5>Admin Login</h5>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="Password" name="password" class="form-control">
						</div>
						<p class="text-danger text-center">
							<?php
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
</body>
</html>
