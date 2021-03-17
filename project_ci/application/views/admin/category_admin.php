<div class="container mt-3">
	<div class="row">
		<div class="col-md-12">
			<h4 class="text-center">
				Add New Category
			</h4>

		</div>
		<div class="col-md-6 offset-md-3">
			<form action="<?= site_url('admin/save_category') ?>" method="post">
			<div class="card">
				<div class="card-body">
					<div class="form-group">
						<label>Category Name</label>
						<input type="text" class="form-control" name="name">
					</div>
					
				</div>
				<div class="card-footer">
					<input type="submit" value="Save" class="btn btn-primary">
				</div>
			</div>
		</div>
	</div>
</div>