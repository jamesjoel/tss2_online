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
	function signup(){
		// The Full Name Field is required.
		$this->load->helper("url");
		$this->load->library("form_validation");
		$this->form_validation->set_rules("full_name", "Full Name", "required");
		$this->form_validation->set_rules("username", "Username", "required|valid_email");
		$this->form_validation->set_rules("password", "Password", "required");
		$this->form_validation->set_rules("re_pass", "Re-Password", "required|matches[password]");
		$this->form_validation->set_rules("address", "Address", "required");
		$this->form_validation->set_rules("gender", "Gender", "required");
		$this->form_validation->set_rules("city", "City", "required");
		$this->form_validation->set_rules("contact", "Contact", "required|numeric|min_length[10]");
		// check all the rules is fullfill or not
		if($this->form_validation->run()==false)
		{
			
			$this->load->view("header");
			$this->load->view("signup");
		}
		else
		{
			// echo "go to database";
			// print_r($_POST);
			// print_r($this->input->post());
			$data["full_name"] = $this->input->post("full_name");
			$data["username"] = $this->input->post("username");
			$data["password"] = $this->input->post("password");
			$data["address"] = $this->input->post("address");
			$data["gender"] = $this->input->post("gender");
			$data["city"] = $this->input->post("city");
			$data["contact"] = $this->input->post("contact");

			$this->load->model("UserModel");
			$this->UserModel->save($data);
			redirect("home");
		}
		
	}


}
?>