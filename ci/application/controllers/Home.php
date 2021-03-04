<?php

class Home extends CI_Controller{

	function index()
	{
		$this->load->helper("url");
		$this->load->view("header");
		$this->load->view("index");
	}
	function about()
	{
		$a = "rohit";
		$b = "pooja";

		$arr = array("x"=>$a, "y"=>$b, "z"=>"indore");

		$this->load->helper("url");
		$this->load->view("header");
		$this->load->view("about", $arr);
		// load or show about.php view in screen
	} // localhost/tss2/ci/index.php/home/demo

	function contact()
	{
		$color = array("red", "green", "blue");

		$arr = array("a"=>$color);

		$this->load->helper("url");
		$this->load->view("header");
		$this->load->view("contact", $arr);
	}// localhost/tss2/ci/index.php/home/demo2


}
?>