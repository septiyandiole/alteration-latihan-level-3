<?php 
/**
 * 
 */
class home_daftar_model extends CI_Model
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