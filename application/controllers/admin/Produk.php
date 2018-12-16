<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/produk/index');
	}
	public function add()
	{
		$this->load->view('admin/produk/add');
	}
	public function update()
	{
		$data_produk = [
			"nama_produk" => "Samsung A6",
			"harga_produk" => 3000000,
			"deskripsi" => "Handphone RAM 3GB",
			"gambar" => "",
			"stok" => 5
		];
		$this->load->view('admin/produk/update', $data_produk);
	}
}
