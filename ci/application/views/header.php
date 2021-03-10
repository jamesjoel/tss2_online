<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.bundle.js"></script>
</head>
<!-- 
	1. base_url() ---- css, images, js

	2. site_url() --- <form action, <a href



 -->
<body>

	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <!-- Brand -->
	  <a class="navbar-brand" href="#">The Stepping Stone</a>

	  <!-- Toggler/collapsibe Button -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <!-- Navbar links -->
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url('home/index'); ?>">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url('home/about') ?>">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url('home/contact'); ?>">Contact</a>
	      </li>
	      <?php
	      if($this->session->userdata("is_user_logged_in"))
	      { ?>
	      	<li class="nav-item">
	      	  <a class="nav-link" href="<?php echo site_url('user'); ?>">Dashboard</a>
	      	</li>
	      	<li class="nav-item">
	      	  <a class="nav-link" href="<?php echo site_url('user/profile'); ?>">Profile</a>
	      	</li>
	      	<li class="nav-item">
	      	  <a class="nav-link" href="<?php echo site_url('user/logout'); ?>">Logout</a>
	      	</li>
	      <?php 
	  		}
	      else
	      { ?>

		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('home/signup'); ?>">Signup</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('home/login'); ?>">Login</a>
		      </li>
	      <?php 
	  		}
	      ?>

	    </ul>
	  </div>
	</nav>