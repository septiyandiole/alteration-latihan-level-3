<?php 
/**
 * 
 */
class Home_daftar_model extends CI_Model
{

	public function daftar($username, $password)
	{
		$data = [
			'username' => $username,
			'password' => $password
		];
		
		$data = $this->db->insert('user', $data);		
	}
	
}
?>