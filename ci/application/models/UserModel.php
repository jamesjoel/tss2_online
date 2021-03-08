<?php

class UserModel extends CI_Model{



	function save($arr)
	{
		// $query = "INSERT INTO user_tbl (full_name, ... ) VALUES ('')"
		// mysqli_query($con, $query);
		$this->load->database();
		$this->db->insert("user_tbl", $arr);

	}
}

// save(20);

?>