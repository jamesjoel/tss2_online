<?php
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	    $this->load->model("Typemodel");
	    $this->load->model("Adsmodel");
	}
	function backdoor()
	{
		if(! $this->session->userdata("is_admin_logged_in")){
			redirect("/");
		}
	}
	function index()
	{
		$this->load->view("admin/header_admin");
		$this->load->view("admin/index_admin");
	}

	function dashboad()
	{
		$this->backdoor();
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
		$this->backdoor();
		$result = $this->Typemodel->get_all();
		$arr['result']=$result;
		$this->load->view("admin/header_admin");
		$this->load->view("admin/ads_admin", $arr);
	}
	function view_ads()
	{
		$this->backdoor();
		$result = $this->Adsmodel->get_all();
		$arr['result']=$result;
		$this->load->view("admin/header_admin");
		$this->load->view("admin/view_ads", $arr);

	}
	function save_ads()
	{
		// print_r($this->input->post());
		$data['title']=$this->input->post("title");
		$data['price']=$this->input->post("price");
		$data['detail']=$this->input->post("detail");
		$data['type']=$this->input->post("type");
		// print_r($data);die;
		$this->Adsmodel->save($data);
		// $this->Adsmodel->demo();
		redirect("admin/dashboad");
	}
	function save_category()
	{
		// print_r($this->input->post());
		$data['name']=$this->input->post("name");
		
		$this->Typemodel->save($data);
		// $this->Adsmodel->demo();
		redirect("admin/dashboad");
	}
	function category()
	{
		$this->backdoor();
		$this->load->view("admin/header_admin");
		$this->load->view("admin/category_admin");
	}
	function logout()
	{
		$this->backdoor();
		$this->session->sess_destroy();
	
		redirect('/');

	}
	
}

?>