<?php
class Home extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		$this->load->view("header");
		$this->load->view("index");
	}
	function login()
	{
		$this->load->view("header");
		$this->load->view("login");

	}
	function auth()
	{
		// print_r($this->input->post());/
		$u = $this->input->post("username");
		$p = $this->input->post("password");

		$this->load->model("UserModel");
		$result=$this->UserModel->select_by_username($u);
		// if(mysqli_num_rows($result)==1)

		if($result->num_rows()==1)
		{
			// mysqli_fetch_assoc($result)
			$data = $result->row_array();
			// print_r($data);
			if($data['password']==$p)
			{
				$this->session->set_userdata("name", $data['full_name']);
				$this->session->set_userdata("id", $data['id']);
				$this->session->set_userdata("is_user_logged_in", true);
				redirect("/user");
			}
			else
			{

				$this->session->set_flashdata("msg", "This Password is Incorrect");
				redirect("home/login");

			}
		}
		else
		{
			$this->session->set_flashdata("msg", "This Username and Password is Incorrect");
			redirect("home/login");

		}

	}


	function about()
	{
		$a = "rohit";
		$b = "pooja";

		$arr = array("x"=>$a, "y"=>$b, "z"=>"indore");

		
		$this->load->view("header");
		$this->load->view("about", $arr);
		// load or show about.php view in screen
	} // localhost/tss2/ci/index.php/home/demo

	function contact()
	{
		$color = array("red", "green", "blue");

		$arr = array("a"=>$color);

		
		$this->load->view("header");
		$this->load->view("contact", $arr);
	}// localhost/tss2/ci/index.php/home/demo2
	function signup(){
		// The Full Name Field is required.
		
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
			redirect("home/login");
		}
		
	}


}
?>