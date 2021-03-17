<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.bundle.js"></script>
</head>
<body>

	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <!-- Brand -->
	  <a class="navbar-brand" href="#">UNNATI</a>

	  <!-- Toggler/collapsibe Button -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <!-- Navbar links -->
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <!-- <li class="nav-item"> -->
	      <?php	
	      	if ($this->session->userdata("is_admin_logged_in") == true)
	      {?>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url('admin/ads')?>">Ads</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url('admin/view_ads')?>">Views Ads</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url('admin/category')?>">category</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url('admin/view_category')?>">View Category</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url('admin/logout')?>">Logout</a>
	      </li>
	        <?php
	    	}
			?>
 			
	    </ul>
	  </div>
	</nav>