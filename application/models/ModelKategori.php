<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKategori extends CI_Model {
	public function insert($data)
	{
		$this->db->insert('kategori', $data);
	}
	public function update($id,$data)
	{
		$this->db->where('id_k', $id);
		$this->db->update('kategori', $data);
	}
	public function destroy($id,$table)
	{
		$this->db->where('id_k', $id);
		$this->db->delete($table);
	}
}

/* End of file KategoriModel.php */
/* Location: ./application/models/KategoriModel.php */