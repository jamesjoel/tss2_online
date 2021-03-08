<div class="container mt-4">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form method="post" action="">
			<div class="card">
				<div class="card-header">
					<h4>Registration</h4>
				</div>
				<div class="card-body">
					<?php
					//echo validation_errors();
					?>
					<div class="form-group">
						<label>Full Name</label>
						<input name="full_name" type="text" class="form-control" value="<?php echo set_value('full_name') ?>">
						<div class="text-danger">
							<?php echo form_error("full_name"); ?>
						</div>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input name="username" type="text" class="form-control" value="<?php echo set_value('username') ?>">
						<div class="text-danger">
							<?php echo form_error("username"); ?>
						</div>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>">
						<div class="text-danger">
							<?php echo form_error("password"); ?>
						</div>
					</div>
					<div class="form-group">
						<label>Re-Password</label>
						<input type="password" name="re_pass" class="form-control" value="<?php echo set_value('re_pass') ?>">
						<div class="text-danger">
							<?php echo form_error("re_pass"); ?>
						</div>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" name="address"><?php echo set_value('address') ?></textarea>
						<div class="text-danger">
							<?php echo form_error("address"); ?>
						</div>
					</div>
					<div class="form-group">
						<label>Gender</label>
						<br />
						Male<input <?php echo set_radio("gender", "male"); ?> type="radio" name="gender" value="male">
						Female<input <?php echo set_radio("gender", "female"); ?> type="radio" name="gender" value="female">
						<div class="text-danger">
							<?php echo form_error("gender"); ?>
						</div>
					</div>
					<div class="form-group">
						<label>City</label>
						<select class="form-control" name="city">
							<option value="">Select</option>
							<option <?php echo set_select("city", "indore"); ?> value="indore">Indore</option>
							<option <?php echo set_select("city", "mumbai"); ?> value="mumbai">Mumbai</option>
							<option <?php echo set_select("city", "pune"); ?> value="pune">Pune</option>
							<option <?php echo set_select("city", "delhi"); ?> value="delhi">Delhi</option>
							
						</select>
						<div class="text-danger">
							<?php echo form_error("city"); ?>
						</div>
					</div>
					<div class="form-group">
						<label>Contact</label>
						<input type="text" class="form-control" name="contact" value="<?php echo set_value('contact') ?>">
						<div class="text-danger">
							<?php echo form_error("contact"); ?>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" class="btn btn-primary">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>