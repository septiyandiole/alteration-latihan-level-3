<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if (empty($this->session->userdata('username'))) {
			redirect('home_login');
		}
	}

	public function index()
	{
		$this->load->model('produk_model');
		$this->load->model('kategori_model');

		$produk = $this->produk_model->get();
		$kategori = $this->kategori_model->get();
		$data =[
			'produk' => $produk,
			'kategori' => $kategori
		];

		$this->load->view('home/index', $data);
	}
}