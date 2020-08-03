<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisBrg extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('kd_user') ) {
            redirect('Login');
        }else{
		$this->load->model('JbModel');  
		$this->load->library('form_validation'); 
		}
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
		$data['judul'] = 'Daftar Data Jenis Barang';
		$data['jb'] = $this->JbModel->getAllJb();
		$data['content'] = 'jb/index';
		
		if ( $this->input->post('keyword')) {
            $data['jb'] = $this->JbModel->searchJb();
        }
       
        $this->load->view('templates/templates',$data);
	}
	public function tambah()
	{
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
		$this->form_validation->set_rules('kd_jb', 'Kode Jenis Barang', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama Jenis Barang', 'required|trim');
		
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Tambah Data Jenis Barang';
			$data['content'] = 'jb/tambah';
			$this->load->view('templates/templates',$data);
        }else{
            $this->JbModel->addJb();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('JenisBrg');
        }
	}
	public function update($id)
	{
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
		$this->form_validation->set_rules('kd_jb', 'Kode Jenis Barang', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama Jenis Barang', 'required|trim');
		$data['jb'] = $this->JbModel->getJbbyId($id);

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Ubah Data Jenis Barang';
			$data['content'] = 'jb/update';
			$this->load->view('templates/templates',$data);
        }else{
            $this->JbModel->updateJb($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('JenisBrg');
        }
	}

	public function delete($id)
    {
        $this->JbModel->deleteJb($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('JenisBrg');
    }


}
