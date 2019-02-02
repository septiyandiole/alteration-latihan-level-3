<?php 

class home_order_model extends CI_Model
{
	public $id_order;
	public $username;
	public $id_produk;
	public $jumlah_barang;
	public $tgl_order;

	public function get()
	{
		$data = $this->db->get('produk');

		return $data->result();
	}
	public function get_one($x)
	{	
		$condition = [
			'id' => $x
		];
		$data = $this->db->get_where('produk', $condition);

		return $data->row();
	}
	public function detail($username, $id_produk, $jumlah_barangs)
	{
		$data = [
			'username' => $username,
			'id_produk' => $id_produk,
			'jumlah_barang' => $jumlah_barang,

		];
		$this->db->insert('order', $data);
	}
}
?>