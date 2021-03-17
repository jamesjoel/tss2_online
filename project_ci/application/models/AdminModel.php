<?php
class AdminModel extends CI_Model
{
	 function __construct()
	 {
	 	parent::__construct();
	 	$this->load->database();

	 }
	 function select_by_username($u)
	 {
  			$this->db->where("name",$u);
   			$result=$this->db->get("admin");
   			return $result;
	}
}
?>