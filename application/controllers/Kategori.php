<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelKategori');
	}
	public function create()
	{
		if (!$this->session->userdata('status')) {
			redirect('user/login','refresh');
		};
		return $this->load->view('dashboard/kategori/create');
	}
	public function store()
	{
		if (!$this->session->userdata('status')) {
			redirect('user/login','refresh');
		};
		$this->ModelKategori->insert([
			'nama_kategori' => ucwords($this->input->post('nama_kategori'))
		]);
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function edit($id)
	{
		if (!$this->session->userdata('status')) {
			redirect('user/login','refresh');
		};
		$this->db->where('id_k', $id);
		$data['content'] = $this->db->get('kategori')->result();
		return $this->load->view('dashboard/kategori/edit', $data);
	}
	public function editStore($id)
	{
		if (!$this->session->userdata('status')) {
			redirect('user/login','refresh');
		};
		$this->ModelKategori->update($id,[
			'nama_kategori' => ucwords($this->input->post('nama_kategori'))
		]);
		redirect('dashboard/kategori','refresh');
	}

	public function delete($id)
	{
		if (!$this->session->userdata('status')) {
			redirect('user/login','refresh');
		};
		$this->ModelKategori->destroy($id,'kategori');
		redirect('dashboard/kategori','refresh');
	}
}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */