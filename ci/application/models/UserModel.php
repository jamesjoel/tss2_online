<?php

class UserModel extends CI_Model{

// the __construct() should be call autometic and call before any other function
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function select_by_username($u)
	{
		// echo $u;die;
		// SELECT * FROM user_tbl WHERE username='$u'
		$this->db->where("username", $u);
		$result=$this->db->get("user_tbl");
		return $result;
	}

	function save($arr)
	{
		// $query = "INSERT INTO user_tbl (full_name, ... ) VALUES ('')"
		// mysqli_query($con, $query);
		$this->db->insert("user_tbl", $arr);
	}
}

// save(20);

?>