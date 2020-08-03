<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

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
        }else {
		$this->load->model('MenuModel');  
		$this->load->library('form_validation'); 
		}
	}

	//Menu Header
	public function header()
	{
		$data['judul'] = 'Daftar Data Menu Header';
		$data['header'] = $this->MenuModel->getAllMenuHeader();
		$data['content'] = 'menu/header/index';
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
		
		if ( $this->input->post('keyword')) {
            $data['header'] = $this->MenuModel->searchHeader();
        }
       
        $this->load->view('templates/templates',$data);
	}
	public function tambahHeader()
	{
		$this->form_validation->set_rules('kd_menu', 'Kode Menu Header', 'required|trim');
		$this->form_validation->set_rules('nama', 'Link Menu Header', '');
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
		
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Tambah Data Menu Header';
			$data['content'] = 'menu/header/tambah';
			$this->load->view('templates/templates',$data);
        }else{
            $this->MenuModel->addMenuHeader();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('Menu/header');
        }
	}
	public function updateHeader($id)
	{
		$this->form_validation->set_rules('kd_menu', 'Kode Menu Header', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama Menu Header', 'required|trim');
		$this->form_validation->set_rules('link', 'Link Menu Header', '');
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
		
		$data['header'] = $this->MenuModel->getMenuHeaderbyId($id);

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Ubah Data Menu Header';
			$data['content'] = 'menu/header/update';
			$this->load->view('templates/templates',$data);
        }else{
            $this->MenuModel->updateMenuHeader($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Menu/header');
        }
	}

	public function deleteHeader($id)
    {
        $this->MenuModel->deleteMenuHeader($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Menu/header');
	}
	
	//menu marketplace
	public function marketplace()
	{
		$data['judul'] = 'Daftar Data Menu Marketplace';
		$data['marketplace'] = $this->MenuModel->getAllMenuMarketplace();
		$data['content'] = 'menu/marketplace/index';
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
	   
		if ( $this->input->post('keyword')) {
            $data['marketplace'] = $this->MenuModel->searchMarketplace();
		}
		
        $this->load->view('templates/templates',$data);
	}
	public function tambahMarketplace()
	{
		$this->form_validation->set_rules('kd_menu', 'Kode Menu Marketplace', 'required|trim');
		$this->form_validation->set_rules('img_brg', 'Image Menu Marketplace', '');
		$this->form_validation->set_rules('link', 'Link Menu Marketplace', 'required|trim');
		
		
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Tambah Data Menu Marketplace';
			$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
			$data['content'] = 'menu/marketplace/tambah';
			$this->load->view('templates/templates',$data);
        }else{
            $upload_image = $_FILES['img_market']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|png|jpg|jpeg';
                $config['upload_path'] = './uploads/img_market/';
    
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload('img_market')) {
                    $new_image = $this->upload->data('file_name');
					$data['kd_menu'] = $this->input->post('kd_menu');
					$data['img_marketplace'] = $new_image;
                }else {
                    echo $this->upload->display_errors();
                }
			}

            $data['link'] = $this->input->post('link');
            
			$this->db->insert('tbl_marketplace',$data);
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('Menu/marketplace');
        }
	}
	public function getWhereMarketplace($id)
	{
		$this->form_validation->set_rules('kd_menu', 'Kode Menu Marketplace', 'required|trim');
		$this->form_validation->set_rules('img_market', 'Nama Menu Marketplace', '');
		$this->form_validation->set_rules('link', 'Link Menu Marketplace', 'required|trim');
		$data['marketplace'] = $this->MenuModel->getMenuMarketplacebyId($id);
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Ubah Data Menu Marketplace';
			$data['content'] = 'menu/marketplace/update';
			$this->load->view('templates/templates',$data);
        }else{
            $this->updateMarketplace();
        }
	}
	public function updateMarketplace()
    {
        $kd_menu = $this->input->post('kd_menu');
        $link = $this->input->post('link');

        //Jika Ada gambar di upload
        $upload_image = $_FILES['img_market']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|png|jpg|jpeg';
            $config['upload_path'] = './uploads/img_market/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('img_market')) {
                $data['mrkt'] = $this->db->get_where('tbl_marketplace', ['kd_menu' => $kd_menu])->row_array();
                $old_image = $data['mrkt']['img_marketplace'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'uploads/img_market/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('img_marketplace', $new_image);
            }else {
                echo $this->upload->display_errors();
            }
        } 

		$this->db->set('link', $link);
		$this->db->where('kd_menu', $kd_menu);
        $this->db->update('tbl_marketplace');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('Menu/marketplace');
    }

	public function deleteMarketplace($id)
    {
        $this->MenuModel->deleteMenuMarketplace($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Menu/marketplace');
	}
	
	//Menu KOntak
	public function kontak()
	{
		$data['judul'] = 'Daftar Data Menu Kontak';
		$data['kontak'] = $this->MenuModel->getAllMenuKontak();
		$data['content'] = 'menu/kontak/index';
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
		
		if ( $this->input->post('keyword')) {
            $data['kontak'] = $this->MenuModel->searchKontak();
        }
       
        $this->load->view('templates/templates',$data);
	}
	public function tambahKontak()
	{
		$this->form_validation->set_rules('kd_menu', 'Kode Menu Kontak', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Nama Menu Kontak', 'required|trim');
		$this->form_validation->set_rules('no_telp', 'Nama Menu Kontak', 'required|trim');
		$this->form_validation->set_rules('email', 'Nama Menu Kontak', 'required|trim');
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
		
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Tambah Data Menu Kontak';
			$data['content'] = 'menu/kontak/tambah';
			$this->load->view('templates/templates',$data);
        }else{
            $this->MenuModel->addMenuKontak();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('Menu/kontak');
        }
	}
	public function updateKontak($id)
	{
		$this->form_validation->set_rules('kd_menu', 'Kode Menu Kontak', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Nama Menu Kontak', 'required|trim');
		$this->form_validation->set_rules('no_telp', 'Nama Menu Kontak', 'required|trim');
		$this->form_validation->set_rules('email', 'Nama Menu Kontak', 'required|trim');
		$data['kontak'] = $this->MenuModel->getMenuKontakbyId($id);
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Ubah Data Menu Kontak';
			$data['content'] = 'menu/kontak/update';
			$this->load->view('templates/templates',$data);
        }else{
            $this->MenuModel->updateMenuKontak($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Menu/kontak');
        }
	}

	public function deleteKontak($id)
    {
        $this->MenuModel->deleteMenuKontak($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Menu/kontak');
	}
	
	//menu sosmed
	public function sosmed()
	{
		$data['judul'] = 'Daftar Data Menu Sosmed';
		$data['sosmed'] = $this->MenuModel->getAllMenuSosmed();
		$data['content'] = 'menu/sosmed/index';
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
		
		if ( $this->input->post('keyword')) {
            $data['sosmed'] = $this->MenuModel->searchSosmed();
        }
       
        $this->load->view('templates/templates',$data);
	}
	public function tambahSosmed()
	{
		$this->form_validation->set_rules('kd_menu', 'Kode Menu Sosmed', 'required|trim');
		$this->form_validation->set_rules('class', 'Class Menu Sosmed', 'required|trim');
		$this->form_validation->set_rules('link', 'Link Menu Sosmed', 'required|trim');
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
		
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Tambah Data Menu Sosmed';
			$data['content'] = 'menu/sosmed/tambah';
			$this->load->view('templates/templates',$data);
        }else{
            $this->MenuModel->addMenuSosmed();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('Menu/sosmed');
        }
	}
	public function updateSosmed($id)
	{
		$this->form_validation->set_rules('kd_menu', 'Kode Menu Sosmed', 'required|trim');
		$this->form_validation->set_rules('class', 'Class Menu Sosmed', 'required|trim');
		$this->form_validation->set_rules('link', 'Link Menu Sosmed', 'required|trim');
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();

		$data['sosmed'] = $this->MenuModel->getMenuSosmedbyId($id);

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Ubah Data Menu Sosmed';
			$data['content'] = 'menu/sosmed/update';
			$this->load->view('templates/templates',$data);
        }else{
            $this->MenuModel->updateMenuSosmed($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Menu/sosmed');
        }
	}

	public function deleteSosmed($id)
    {
        $this->MenuModel->deleteMenuSosmed($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Menu/sosmed');
	}
	

	//footer
	public function footer()
	{
		$data['judul'] = 'Daftar Data Menu Footer';
		$data['footer'] = $this->MenuModel->getAllMenuFooter();
		$data['content'] = 'menu/footer/index';
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
		
		if ( $this->input->post('keyword')) {
            $data['footer'] = $this->MenuModel->searchFooter();
        }
       
        $this->load->view('templates/templates',$data);
	}
	public function tambahFooter()
	{
		$this->form_validation->set_rules('kd_menu', 'Kode Menu Footer', 'required|trim');
		$this->form_validation->set_rules('menu_footer', 'Menu Footer', 'required|trim');
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
		
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Tambah Data Menu Footer';
			$data['content'] = 'menu/footer/tambah';
			$this->load->view('templates/templates',$data);
        }else{
            $this->MenuModel->addMenuFooter();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('Menu/footer');
        }
	}
	public function updateFooter($id)
	{
		$this->form_validation->set_rules('kd_menu', 'Kode Menu Footer', 'required|trim');
		$this->form_validation->set_rules('menu_footer', 'Menu Footer', 'required|trim');
		$data['footer'] = $this->MenuModel->getMenuFooterbyId($id);
		$data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Ubah Data Menu Footer';
			$data['content'] = 'menu/footer/update';
			$this->load->view('templates/templates',$data);
        }else{
            $this->MenuModel->updateMenuFooter($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Menu/footer');
        }
	}

	public function deleteFooter($id)
    {
        $this->MenuModel->deleteMenuFooter($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Menu/footer');
    }


}
