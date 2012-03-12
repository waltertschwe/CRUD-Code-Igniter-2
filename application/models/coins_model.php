<?php
class Coins_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_all_coins() {
		
		$query = $this->db->get('coins');
		return $query->result_array();
		
	}

}