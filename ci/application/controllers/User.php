<?php
/*
	1. load library/helper perticular function, and its avalable only this function

	2. load library/helper __construct(), then its avalable for whole class/controller.

	3. load library/helper ---> application---->config ---> autoload.php


*/
class User extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->backdoor();
	}

	function backdoor()
	{
		if(! $this->session->userdata("is_user_logged_in"))
		{
			redirect("home");
		}
	}
	function index()
	{
		$this->load->view("header");
		$this->load->view("user/dashboard");
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect("home/login");
	}
}
?>