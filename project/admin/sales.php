<?php
include("db.php");
include("header.php");
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

<div class="container mt-5">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form action="save_sale.php" method="post">
				
			
			<div class="card bt-5">
				<div class="card-header">
					<h3>Add New Sale</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Sale Name</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label>Date</label>
						<input type="text" id="datepicker" name="date" class="form-control">
					</div>
					
				</div>
				<div class="card-footer">
					<input type="submit" value="Add" class="btn btn-primary">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>

