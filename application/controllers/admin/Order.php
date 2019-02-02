<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(empty($this->session->userdata('username')))
		{
			redirect('admin/login');
		}
	}
	public function index()
	{
		$this->load->model('order_model');

		$order = $this->order_model->get();
		$data = [
			"order" => $order
		];

		$this->load->view('admin/order/index', $data);
	}
}