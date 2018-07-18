<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelUser');
	}

	public function register()
	{
		$this->load->view('user/register');
	}
	public function login()
	{
		$this->load->view('user/login');
	}

	public function check_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$check = $this->ModelUser->check([
			'username' => $username,
			'password' => $password
		]);

		if ($check > 0) {
			$data = [
				'username' => $username,
				'status' => 'login'
			];
			$this->session->set_userdata($data);
			redirect('dashboard/kategori','refresh');
		}else {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function store()
	{
		$this->ModelUser->insert([
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'email' => $this->input->post('email'),
			'telp' => $this->input->post('telp'),
			'level' => 'admin',
			'aktif' => 'Y',
		]);
		
		$data = [
			'username' => $this->input->post('username'),
			'status' => 'login'
		];

		$this->session->set_userdata($data);
		redirect('dashboard/kategori','refresh');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('user/login','refresh');
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */