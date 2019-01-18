<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home_login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_login_model');
	}
	public function index()
	{
		$this->check_login();
		if (!empty($this->input->server('REQUEST_METHOD') == 'POST')) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if (!empty($this->home_login_model->get_user_login($username, $password))) {
				$this->session->set_userdata(array('username'=>$username));
				
				redirect('Home');
			} else {
				$this->session->set_flashdata("error", "username atau password salah");
				$this->load->view('home/login');
			}
		} else {
			$this->load->view('home/login');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		{
			redirect('home_login');
		}
	}
	private function check_login()
	{
		if (!empty($this->session->userdata('username'))) {
			redirect('Home');
		}
	}
}