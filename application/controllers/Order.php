<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('home_order_model');
        if (!$this->session->userdata('username')){
            redirect('home_login') ;
        }

    }


	public function detail($id)
	{
	    $detail_produk = $this->home_order_model->get_one($id);
        $data = [
            'username'=> $this->session->userdata('username'),
            'produk' => $detail_produk
        ];

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $username = $this->input->post('username');
            $id_produk = $this->input->post('id_produk');
            $jumlah_barang = $this->input->post('jumlah_barang');          

            $this->home_order_model->detail($username, $id_produk, $jumlah_barang);
            redirect('home/index');
        }

        $this->load->view('home/order', $data);
	}
    
}