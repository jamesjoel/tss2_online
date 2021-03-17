<div class="container mt-5">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h4 class="text-center">View All Ads</h4>
			<table class="table table-bordered table-dark table-stripped table-hover">
				<tr>
					<th>S.No.</th>
					<th>Title</th>
					<th>Price</th>
					<th>Type</th>
				</tr>
				<?php 
				$n=1;
				foreach($result->result_array() as $data){ ?>
					<tr>
						<td><?= $n; ?></td>
						<td><?= $data['title']; ?></td>
						<td><?= $data['price']; ?></td>
						<td><?= $data['type']; ?></td>
					</tr>


				<?php } ?>
			</table>
		</div>
	</div>
</div>