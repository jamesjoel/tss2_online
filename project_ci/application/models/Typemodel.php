<?php

class Typemodel extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function save($arr)
	{
		$this->db->insert("type_tbl", $arr);
	}
	function update($id, $arr)
	{
		$this->db->where("id", $id);
		$this->db->update("type_tbl", $arr);
	}
	function delete($id)
	{
		$this->db->where("id", $id);
		$this->db->delete("type_tbl");
	}
	function get_all()
	{
		$result = $this->db->get("type_tbl");
		return $result;
	}
	function get_by_id($id)
	{
		$this->db->where("id", $id);
		$result = $this->db->get("type_tbl");
		return $result;
	}
}
?>