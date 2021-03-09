<div class="container mt-4">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form method="post" action="<?php echo site_url('home/auth') ?>">
			<div class="card">
				<div class="card-header">
					<h4>Registration</h4>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Username</label>
						<input name="username" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input name="password" type="password" class="form-control">
					</div>
					<p class="text-danger text-center">
						<?php 
						echo $this->session->flashdata("msg"); 
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