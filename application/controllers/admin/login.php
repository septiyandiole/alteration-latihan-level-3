<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('admin/login_model');
	}

	public function index()
	{
		$this->check_login();

		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if (!empty($this->login_model->get_user_login($username, $password))) 
			{
				$this->session->set_userdata(array('username' => $username));

				redirect('admin/produk');
			}
			else
			{
				$this->session->set_flashdata("error", "username atau password salah");
				$this->load->view('admin/login');
			}
		}
		else
		{
			$this->load->view('admin/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		{
			redirect('admin/login');
		}
	}

	private function check_login()
	{
		if(!empty($this->session->userdata('username')))
		{
			redirect('admin/produk');
		}
	}
}