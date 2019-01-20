<?php 
/**
 * 
 */
class kategori_model extends CI_Model
{
	public $id;
	public $nama;
	public $slug;
	public $cover;


	
	public function get()
	{
		$data = $this->db->get('kategori');

		return $data->result();
	}

	public function get_one($id_kategori)
	{
		$condition = [
			'id' => $id_kategori
		];
		$data = $this->db->get_where('kategori', $condition);

		return $data->row();
	}

	public function add($nama, $slug, $cover)
	{
		$data = [
			'nama' => $nama,
			'slug' => $slug,
			'cover' => $cover		
			
		];
		
		$data = $this->db->insert('kategori', $data);		
	}
	public function update($id, $nama, $slug, $cover)
	{
		$data = [
			'nama' => $nama,
			'slug' => $slug,
			'cover' => $cover
			
		];

		$this->db->where('id', $id);
		$data = $this->db->update('kategori', $data);		
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('kategori');		
	}

}
?>