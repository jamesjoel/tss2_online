<!-- 
	1. textbox ---- <input type="text" />

	2. textarea   ---- <textarea></textarea>

	3. password ---- <input type="password" />

	4. button ----- <input type="button" />

	5. submit ---- <input type="submit" />

	6. reset ---- <input type="reset" />

	7. hidden --- <input type="hidden" />

	8. checkbox --- <input type="checkbox" />

	9. radio --- <input type="radio" />

	10. select ---- <select>
						<option></option>
						<option></option>
					</select>

	11. file ---- <input type="file" />




 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-4">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="save.php" method="post">
			<div class="card">
				<div class="card-header">
					<h2>Registration</h2>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="first_name" class="form-control">
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="last_name" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" class="form-control">
					</div>

					<div class="form-group">
						<label>Address</label>
						<textarea name="add" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>City</label>
						<select name="city" class="form-control">
							<option>Select</option>
							<option>Indore</option>
							<option>Bhopal</option>
							<option>Mumbai</option>
						</select>
					</div>
					<div class="form-group">
						<label>Gender</label>
						<br />
						Male <input type="radio" name="gender" value="male">
						Female <input type="radio" name="gender" value="female">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Submit" class="btn btn-primary">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>




</body>
</html>