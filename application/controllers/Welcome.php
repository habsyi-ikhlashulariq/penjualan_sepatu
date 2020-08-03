<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
			$this->load->model('BarangModel');
			$this->load->model('JbModel');
			$this->load->model('UserModel');
			$this->load->model('TampilModel');
			$this->load->library('pagination');
	}
	private function temp()
	{
		
		if ($this->input->post('submit')) {
			//echo $this->input->post('keyword');
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_user('keyword', $data['keyword']);
		}else{
			$data['keyword'] = $this->session->userdata('keyword'); 
		}
		$this->db->like('nm_brg', $data['keyword']);
		$this->db->from('tbl_brg');
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 3;
		$this->pagination->initialize($config);
		
		$data['header'] = $this->TampilModel->header();
		$data['jb'] = $this->TampilModel->jb();
		$data['marketplace'] = $this->TampilModel->marketplace();
		$data['kontak'] = $this->TampilModel->kontak();
		$data['footer'] = $this->TampilModel->footer();
		$data['sosmed'] = $this->TampilModel->sosmed();
		$data['slide_title'] = $this->TampilModel->slide_title();
		$data['slide1'] = $this->TampilModel->slide1();
		$data['slide2'] = $this->TampilModel->slide2();
		$data['slide3'] = $this->TampilModel->slide3();
		$data['produk_baru'] = $this->TampilModel->produk_baru();
		$data['countBrg'] = $this->TampilModel->countBrg();
		$data['hrg_rendah'] = $this->TampilModel->gethargarendah();
		$data['hrg_tinggi'] = $this->TampilModel->gethargatinggi();
		

		$data['start'] = $this->uri->segment(3);
		$data['brg'] = $this->TampilModel->getbrg($config['per_page'], $data['start'], $data['keyword']);
		return $data;
	}
	public function index()
	{
		$data = $this->temp();
		$this->load->view('/layout/templates/header',$data);
		$this->load->view('/layout/brg/index',$data);
		$this->load->view('/layout/templates/footer',$data);
	}
	public function slide()
	{
		$data = $this->temp();

		$this->load->view('/layout/templates/header',$data);
		$this->load->view('/layout/brg/index',$data);
		$this->load->view('/layout/templates/footer',$data);
	}
	
	public function jb($id)
	{
		$data = $this->temp();

		$data['brand'] = $this->TampilModel->getBrgbyId($id);
		
		$this->load->view('/layout/templates/header',$data);
		$this->load->view('/layout/brg/jb',$data);
		$this->load->view('/layout/templates/footer',$data);
	}
	public function detail($id)
	{
		$data = $this->temp();
	
		$data['detail'] = $this->TampilModel->detail($id);
		$data['rekom'] = $this->TampilModel->rekom($id);
		
		$this->load->view('/layout/templates/header',$data);
		$this->load->view('/layout/brg/detail',$data);
		$this->load->view('/layout/templates/footer',$data);
	}
	public function gethargarendah()
	{
		$data = $this->temp();
		$this->load->view('/layout/templates/header',$data);
		$this->load->view('/layout/brg/harga_rendah',$data);
		$this->load->view('/layout/templates/footer',$data);
	}
	public function gethargatinggi()
	{
		$data = $this->temp();
		$this->load->view('/layout/templates/header',$data);
		$this->load->view('/layout/brg/harga_tinggi',$data);
		$this->load->view('/layout/templates/footer',$data);
	}
	public function about()
	{
		$data = $this->temp();
		$this->load->view('/layout/aboutme/index',$data);
	}
	public function order()
	{
		$data = $this->temp();
		$this->load->view('/layout/order/index',$data);
	}
	public function admin()
	{
		if (!$this->session->userdata('kd_user') ) {
            redirect('Login');
        }else {
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
		
			$data['countBrg'] = $this->BarangModel->countBrg();
			$data['countJb'] = $this->JbModel->countJb();
			$data['countUsr'] = $this->UserModel->countUsr();
			$data['content'] = 'templates/index';

			$this->load->view('templates/templates', $data);
		}
	}
}
