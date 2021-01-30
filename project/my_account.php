<?php
include("admin/db.php");

// backdoor protactction code
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}


include("header.php");
?>
<div class="container mt-5" style="min-height: 600px;">
	<div class="row mt-5">
		<div class="col-md-12">
			<h3>Welcome : <?php echo $_SESSION['name']; ?></h3>
		</div>
	</div>
</div>
<?php
include("footer.php")
?>