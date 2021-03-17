<div class="container mt-3">
	<div class="row">
		<div class="col-md-12">
			<h4 class="text-center">
				Add New Ads
			</h4>

		</div>
		<div class="col-md-6 offset-md-3">
			<form action="<?= site_url('admin/save_ads') ?>" method="post">
			<div class="card">
				<div class="card-body">
					<div class="form-group">
						<label>Ads Title</label>
						<input type="text" class="form-control" name="title">
					</div>
					<div class="form-group">
						<label>Ads Type</label>
						<select name="type" class="form-control">
							<option>Select</option>
							<?php
							foreach($result->result_array() as $cate)
							{
								echo "<option>".$cate['name']."</option>";
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<label>Ads Detail</label>
						<input type="text" name="detail" class="form-control">
					</div>
					<div class="form-group">
						<label>Ads Price</label>
						<input type="text" name="price" class="form-control">
					</div>
					<div class="form-group">
						<label>Ads Image</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="card-footer">
					<input type="submit" value="Save" class="btn btn-primary">
				</div>
			</div>
		</div>
	</div>
</div>