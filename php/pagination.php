<?php
/*
	1. Queries
	2. User-Defined Fun
	3. Server Variables
	4. Cookies
	5. Image Update
	6. Pattern by loop


*/



$con = mysqli_connect("localhost", "root", "", "tss2");

$query2 = "SELECT * FROM cities";
$result2 = mysqli_query($con, $query2);

$total_rec = mysqli_num_rows($result2); //1481
$rec_per_page = 100;
$total_pages = ceil($total_rec/$rec_per_page); // 15


if(isset($_GET['pageno']))
{
	$a = $_GET['pageno']; // 5   ---- 401-500
	$b = $a-1; // 4
	$c = $b*$rec_per_page; // 400
	$query = "SELECT * FROM cities LIMIT $c, $rec_per_page";
	// SELECT * FROM cities LIMIT 400, 100
	$result = mysqli_query($con, $query);	
	$x = $c+1;
}
else
{
	$a = 1;
	$query = "SELECT * FROM cities LIMIT $rec_per_page";
	$result = mysqli_query($con, $query);
	$x = 1;
}






?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4 class="text-center mt-4">Pagination in PHP</h4>

			<ul class="pagination">
				<li class="page-item <?php if($a==1) echo 'disabled' ?>">
					<a href="pagination.php?pageno=<?php echo $b; ?>" class="page-link">Pre</a>
				</li>
				<?php
				for($i=1; $i<=$total_pages; $i++)
				{
				?>
				<li class="page-item  <?php if($a == $i) echo 'active'; ?>">
					<a class="page-link"  href="pagination.php?pageno=<?php echo $i; ?>"><?php echo $i; ?></a>
				</li>
				<?php 
				}
				?>
				<li  class="page-item <?php if($a== $total_pages) echo 'disabled'; ?>">
					<a href="pagination.php?pageno=<?php echo $a+1; ?>" class="page-link">Next</a>
				</li>
				
			</ul>

			<table class="table table-dark table-hover table-bordered table-stripped">
				<tr>
					<th>S.No.</th>
					<th>City Name</th>
					<th>State Name</th>
				</tr>
				<?php
				$n=$x;
				while($data = mysqli_fetch_assoc($result))
				{
				?>
					<tr>
						<td><?php echo $n; ?></td>
						<td><?php echo $data['city_name']; ?></td>
						<td><?php echo $data['city_state']; ?></td>
					</tr>
				<?php
				$n++;
				}
				?>

			</table>
		</div>
	</div>
</div>
</body>
</html>