<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function kategori()
	{
		if (!$this->session->userdata('status')) {
			redirect('user/login','refresh');
		};
		$data['content']= $this->db->get('kategori')->result();
		$this->load->view('dashboard/kategori/index', $data);
	}

	public function blogpost()
	{
		if (!$this->session->userdata('status')) {
			redirect('user/login','refresh');
		};
		$data['content']= $this->db->get('post')->result();
		$this->load->view('dashboard/post/index', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */