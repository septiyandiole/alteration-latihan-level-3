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
	public function daftar()
	{
		$this->load->model('home_daftar_model');

		$this->load->library('form_validation');
        $this->form_validation->set_rules(
        	'username',
         	'Username', 
         	'required',
         	array(
         		'required' => '{field} harus diisi',
         	)	
        );

        $this->form_validation->set_rules(
        	'password',
         	'Password', 
         	'required',
         	array(
         		'required' => '{field} harus diisi',
         	)	
        );

        if ($this->form_validation->run() == TRUE)
        {
            $username = $this->input->post('username');  /*sama dengan $_POST['username']*/
            $password = $this->input->post('password');

			$this->home_daftar_model->daftar($username, $password);
			redirect('home_login');
		}

		$this->load->view('home/daftar');
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		{
			redirect('home/index');
		}
	}
	private function check_login()
	{
		if (!empty($this->session->userdata('username'))) {
			redirect('Home');
		}
	}
}