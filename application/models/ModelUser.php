<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model {
	public function insert($data)
	{
		return $this->db->insert('user', $data);
	}
	public function check($data)
	{
		$this->db->where('username', $data['username']);
		$db = $this->db->get('user')->row_array();
		$pass = password_verify($data['password'], $db['password']);
		if ($db && $pass) {
			return true;
		}else {
			return false;
		}
	}
}

/* End of file ModelUser.php */
/* Location: ./application/models/ModelUser.php */
