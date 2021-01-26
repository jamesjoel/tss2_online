<?php
include("header.php")
?>
<div class="container mt-5" style="min-height: 600px;">
	<div class="row mt-5">
		<div class="col-md-6 offset-md-3">
			<form action="save.php" method="post">
			<div class="card">
				<div class="card-header">
					<h5>User Registraion</h5>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Full Name</label>
						<input name="full_name" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Username/Email</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" class="form-control">
					</div>
					<div class="form-group">
						<label>Re-Password</label>
						<input type="password" name="re_pass" class="form-control">
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea name="add" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>City</label>
						<select class="form-control" name="city">
							<option>Select</option>
							<option>Indore</option>
							<option>Mumbai</option>
							<option>Bhopal</option>
							<option>Pune</option>
							<option>Delhi</option>
						</select>
					</div>
					<div class="form-group">
						<label>Gender</label>
						<br />
						Male <input type="radio" name="gender" value="male">
						Female <input type="radio" name="gender" value="female">		
					</div>
				<div class="form-group">
						<label>Contact</label>
						<input type="text" name='contact' class="form-control">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Signup" class="btn btn-success">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<?php
include("footer.php")
?>