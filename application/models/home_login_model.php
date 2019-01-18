<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home_login_model extends CI_Model {
	public $username;
	public $password;
	public function get_user_login($username, $password)
	{
		$filter = [
			'username' => $username,
			'password' => $password
		];
		$query = $this->db->get_where('user', $filter);
		return $query->result();
	}
}