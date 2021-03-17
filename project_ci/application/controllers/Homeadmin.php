<?php
class Homeadmin extends CI_Controller
{
	function __consturct()
	{
		parent::__construct();
	    
	}
	function index()
	{
		$this->load->view("admin/header_admin");
		$this->load->view("admin/index_admin");
	}

	function dashboad()
	{
		$this->load->view("admin/header_admin");
		$this->load->view("admin/dashboad");
	}
	// function home(){
	// 	$this->load->view("admin/header_admin");
	// }

	function auth()
	{
		$u=$this->input->post("email");
		$p=$this->input->post("pass");
        
        $this->load->model("AdminModel");
		$result=$this->AdminModel->select_by_username($u);

		if ($result->num_rows()==1)
		{
			//$data=mysqli_fetch_assoc($result);
			$data=$result->row_array();
			if ($data['password']==$p)
			{
			   $this->session->set_userdata("name",$data['name']);
			   $this->session->set_userdata("id",$data['id']);
			   $this->session->set_userdata("is_admin_logged_in",true);
			   redirect("homeadmin/dashboad");	
			}else
			{
			//print_r($data);
				$this->session->set_flashdata("msg","this password is incorrect");
				redirect("homeadmin/index");
			}
		}else
		{
			$this->session->set_flashdata("msg","this email and password is incorrect");
			redirect("homeadmin/index");
		}
	}
	function ads()
	{
		$this->load->view("admin/ads");
	}
	function category()
	{
		$this->load->view("admin/category_admin");
	}
	function logout()
	{
		$this->session->sess_destroy();
	// 	redirect("admin/logout_admin");
		// $this->load->view("admin/index");
		redirect('Homeadmin/index');

	}
	// function logout()
	// {
	// 	$this->session->sess_destroy();
	// 	redirect("admin/logout_admin");
	// }
	// function backdoor()
	// {
	// 	if (! $this->session->userdata("is_admin_logged_in")) 
	// 	{
	// 		redirect("");
	// 	}
	// }
}

?>