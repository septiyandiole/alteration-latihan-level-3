<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {
	
	public function index()
	{
		$this->load->model('kategori_model');		

		$kategori = $this->kategori_model->get();
		$data =[
			'kategori' => $kategori
		];

		$this->load->view('admin/kategori/index', $data);
	}
	public function add()
	{
		$this->load->model('kategori_model');	

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$nama = $this->input->post('nama');
			$slug = $this->input->post('slug');
			$cover = $this->upload_image('cover');			

			$this->kategori_model->add($nama, $slug, $cover);
			redirect('admin/kategori/index');
		}

		$this->load->view('admin/kategori/add');		
	}
	public function update($id)
	{
		$this->load->model('kategori_model');	
		$kategori = $this->kategori_model->get_one($id);
		
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$nama = $this->input->post('nama');
			$slug = $this->input->post('slug');
			
			
			$cover_hidden = $this->input->post('cover_hidden');
			$cover_upload = $this->upload_image('cover');

			if ($cover_upload) {
				$cover = $cover_upload;
			} else {
				$cover = $cover_hidden;
			}

			$this->kategori_model->update($id, $nama, $slug, $cover);

			redirect('admin/kategori/index');
		} else {
			$data = [
				'nama' => $kategori->nama,
				'slug' => $kategori->slug,
				'cover' => $kategori->cover,
				
			];
		}

		$this->load->view('admin/kategori/update', $data);

	}
	public function delete($id)
	{
		$this->load->model('kategori_model');	
		$this->kategori_model->delete($id);	
		redirect('admin/kategori/index');
	}
	private function upload_image($form_name)
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		

		$this->load->library('upload', $config);

		if ($this->upload->do_upload($form_name)) {
			$file_name = $this->upload->data('file_name');
			return $file_name;
		}

		return'';
	}

}
