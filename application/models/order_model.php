<?php 

class order_model extends CI_Model
{
	public $id;
	public $username;
	public $produk;
	public $jumlah_barang;
	public $tgl_order;

	public function get() 
	{
		 $this->db->select('*');
		 $this->db->from('order');
		 $this->db->join('produk','produk.id=order.id_produk');
		 $query = $this->db->get();
		 return $query->result();
	}

}
?>