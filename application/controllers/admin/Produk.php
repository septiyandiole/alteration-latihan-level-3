<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index()
	{
		$this->load->model('produk_model');

		$produk = $this->produk_model->get();
		$data = [
			"produk" => $produk
		];

		$this->load->view('admin/produk/index', $data);
	}
	public function add()
	{
		$this->load->model('produk_model');

        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $nama = $this->input->post('nama');  /*sama dengan $_POST['nama']*/
            $harga = $this->input->post('harga');
            $deskripsi = $this->input->post('deskripsi');
            $stok = $this->input->post('stok');
            
			// add($nama, $harga, $deskripsi, $gambar, $stok)
			$this->produk_model->add($nama, $harga, $deskripsi, '', $stok);
			redirect('admin/produk/index');
		}	

		$this->load->view('admin/produk/add');	
	}
	public function update($id)
	{
		$this->load->model('produk_model');

		$produk = $this->produk_model->get_one($id);

        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $nama = $this->input->post('nama');  /*sama dengan $_POST['nama']*/
            $harga = $this->input->post('harga');
            $deskripsi = $this->input->post('deskripsi');
            $stok = $this->input->post('stok');

			$this->produk_model->update($id, $nama, $harga, $deskripsi, '', $stok);
			redirect('admin/produk/index');
		}	
        else
        {
            $data = [
				"nama" => $produk->nama,
				"harga" => $produk->harga,
				"deskripsi" => $produk->deskripsi,
				"stok" => $produk->stok
			];
        }  

		$this->load->view('admin/produk/update', $data);
	}
	public function delete($id)
	{
		$this->load->model('produk_model');
		$this->produk_model->delete($id);
		redirect('admin/produk/index');
	}
}
