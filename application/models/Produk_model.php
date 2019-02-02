<?php 

class Produk_model extends CI_Model
{
	public $id;
	public $nama;
	public $harga;
	public $deskripsi;
	public $gambar;
	public $stok;
	public $tgl_upload;

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
	public function update($id, $nama, $harga, $deskripsi, $gambar, $stok)
	{	
		$data = [
			'nama' => $nama,
			'harga' => $harga,
			'deskripsi' => $deskripsi,
			'gambar' => $gambar,
			'stok' => $stok,
		];

		$this->db->where('id', $id);
		$this->db->update('produk', $data);
	}
	public function add($nama, $harga, $deskripsi, $gambar, $stok)
	{
		$data = [
			'nama' => $nama,
			'harga' => $harga,
			'deskripsi' => $deskripsi,
			'gambar' => $gambar,
			'stok' => $stok,
		];
		$this->db->insert('produk', $data);
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('produk');
	}	
}
?>