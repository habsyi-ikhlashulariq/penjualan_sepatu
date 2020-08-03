<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('login/index');
		}else {
			$this->_login();
		}

	}
	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tbl_login', ['email' => $email])->row_array();
		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'nama' => $user['nama'],
					'kd_user' => $user['kd_user'],
				];
				$this->session->set_userdata($data);
				$this->session->set_flashdata('flash', 'Selamat Datang ');
				redirect('welcome/admin');
			}else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" 
				role="alert">Password Salah</div>');
				redirect('Login');
			}
		}else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" 
			role="alert">Email Tidak Terdaftar </div>');
			redirect('Login');
		}
	}

	public function logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('kd_user');
		$this->session->unset_userdata('nama');
		redirect('Login');
	}
}
