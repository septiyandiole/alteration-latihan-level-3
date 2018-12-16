<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$data = [
			"nama" => "Achmad Septiyandi",
			"ttl" => "Jakarta, 16 September 1994",
			"jk" => "Laki-laki",
			"agama" => "Islam",
			"kwr" => "Indonesia",
			"status" => "Belum Kawin",
			"alamat" => "Permata Depok Regency Blok B.8/9",
			"tlp" => "082210576595",
			"email" => "septiyandiole16@gmail.com",
		];
		$this->load->view('CV', $data);
	}
}