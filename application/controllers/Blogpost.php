<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogpost extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelKategori');
	}

	// Add a new item
	public function create()
	{
		$data['content'] = $this->db->get('kategori')->result();
		return $this->load->view('dashboard/post/create', $data);
	}

	public function store()
	{
		
	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file Blogpost.php */
/* Location: ./application/controllers/Blogpost.php */
