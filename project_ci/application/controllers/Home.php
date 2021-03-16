<?php

class Home extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Adsmodel");
		$this->load->model("Typemodel");
	}
	function index()
	{
		$result1 = $this->Adsmodel->get_all();
		$result2 = $this->Typemodel->get_all();
		$arr["ads"]=$result1;
		$arr["type"]=$result2;
		$this->load->view("header");
		$this->load->view("index", $arr);
	}
}
?>