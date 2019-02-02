<?php 

class Login_model extends CI_Model
{
	public $username;
	public $password;

	public function get_user_login($username, $password)
	{
		$filter = ['username' => $username, 'password' => $password];
		$query = $this->db->get_where('admin', $filter);

		return $query->result();
	}
}