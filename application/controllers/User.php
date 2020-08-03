<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('kd_user') ) {
            redirect('Login');
        }else {
        $this->load->model('UserModel');
        $this->load->library('form_validation');
    }
    }
    public function index()
    {
        $data['judul'] = 'Daftar Data User';
		$data['usr'] = $this->UserModel->getAllUser();
        $data['content'] = 'user/index';
        $data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();

        if ( $this->input->post('keyword')) {
            $data['usr'] = $this->UserModel->searchUser();
        }
       
        $this->load->view('templates/templates',$data);
    }
    public function tambah()
	{
		$this->form_validation->set_rules('kd_user', 'Kode User', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama User', 'required|trim');
		$this->form_validation->set_rules('email', 'Email User', 'required|trim|is_unique[tbl_login.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('avatar', 'avatar User', 'required|trim');
        
        $data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();

		
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Tambah Data User';
			$data['content'] = 'user/tambah';
			$this->load->view('templates/templates',$data);
        }else{
            $this->UserModel->addUser();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('User');
        }
    }

	public function delete($id)
    {
        $this->UserModel->deleteUser($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('User');
    }
}


?>