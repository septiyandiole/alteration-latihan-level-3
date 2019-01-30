<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('produk_model');
        if (!$this->session->userdata('username')){
            redirect('home_login') ;
        }

    }




	public function detail($id)
	{
	    $detail_produk = $this->produk_model->get_one($id);
        $data = array (
            'username'=> $this->session->userdata('username'),
            'produk' => $detail_produk
        );

        $this->load->view('order/index', $data);
	}




}