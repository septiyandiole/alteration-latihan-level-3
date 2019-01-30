<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('produk_model');
		$this->load->model('kategori_model');
    }


	public function index()
	{
		

		$produk = $this->produk_model->get();
		$kategori = $this->kategori_model->get();
		$data =[
			'username'=> $this->session->userdata('username'),
			'produk' => $produk,
			'kategori' => $kategori
		];

		$this->load->view('home/index', $data);
	}

	public function order($id)
	{
				$get_detail_produk = $this->produk_model->get_one($id);

		print_r($get_detail_produk);die;

		

	}




}