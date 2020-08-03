<?php 
class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('kd_user') ) {
            redirect('Login');
        }else {
        $this->load->model('BarangModel');
        $this->load->library('form_validation');
        }
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();

        $data['judul'] = 'Daftar Data Barang';
		$data['brg'] = $this->BarangModel->getAllBrg();
        $data['content'] = 'barang/index';

        if ( $this->input->post('keyword')) {
            $data['brg'] = $this->BarangModel->searchBrg();
        }
       
        $this->load->view('templates/templates',$data);
    }
    public function tambah()
	{
		$this->form_validation->set_rules('kd_brg', 'Kode Barang', 'required|trim');
		$this->form_validation->set_rules('img_brg', 'Image Barang', '');
		$this->form_validation->set_rules('nama', 'Nama Barang', 'required|trim');
		$this->form_validation->set_rules('hrg_brg', 'Harga Barang', 'required|trim');
		$this->form_validation->set_rules('ukuran', 'Ukuran Barang', 'required|trim');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Barang', 'required|trim');
		$this->form_validation->set_rules('tgl_upload', 'Tanggal Upload', 'required|trim');
		$this->form_validation->set_rules('jb', 'Jenis Barang', 'required|trim');
		
		if ($this->form_validation->run() == FALSE) {
            $data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
            $data['jb'] = $this->db->get('tbl_jenisbrg')->result_array();
			$data['judul'] = 'Tambah Data Barang';
			$data['content'] = 'barang/tambah';
			$this->load->view('templates/templates',$data);
        }else{

            $upload_image = $_FILES['img_brg']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|png|jpg|jpeg';
                $config['upload_path'] = './uploads/img_brg/';
    
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload('img_brg')) {
                    $new_image = $this->upload->data('file_name');
                    $data['kd_brg'] = $this->input->post('kd_brg');
                    $data['img_brg'] = $new_image;
                }else {
                    echo $this->upload->display_errors();
                }
            }
            $data['nm_brg'] = $this->input->post('nama');
            $data['hrg_brg'] = $this->input->post('hrg_brg');
            $data['ukuran'] = $this->input->post('ukuran');
            $data['deskripsi'] = $this->input->post('deskripsi');
            $data['tgl_upload']= $this->input->post('tgl_upload');
            $data['jb'] = $this->input->post('jb');
            
			$this->db->insert('tbl_brg',$data);
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('Barang');
		}
        }
    
    public function getwhere($id)
    {
        $data['brg'] = $this->BarangModel->getBrgbyId($id);
        $data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
        $data['jb'] = $this->db->get('tbl_jenisbrg')->result_array();
        $data['judul'] = 'Ubah Data Barang';

        $this->form_validation->set_rules('kd_brg', 'Kode Barang', 'required|trim');
        $this->form_validation->set_rules('img_brg', 'Image Barang', '');
		$this->form_validation->set_rules('nama', 'Nama Barang', 'required|trim');
		$this->form_validation->set_rules('hrg_brg', 'Harga Barang', 'required|trim');
		$this->form_validation->set_rules('ukuran', 'Ukuran Barang', 'required|trim');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Barang', 'required|trim');
		$this->form_validation->set_rules('tgl_upload', 'Tanggal Upload', 'required|trim');
        $this->form_validation->set_rules('jb', 'Jenis Barang', 'required|trim');


        if ($this->form_validation->run() == FALSE) {
            $data['content'] = 'barang/update';
			$this->load->view('templates/templates',$data);
        }else {
            $this->update();
        }
    }
    public function update()
    {
        $kd_brg = $this->input->post('kd_brg');
        $nm_brg = $this->input->post('nama');
        $hrg_brg = $this->input->post('hrg_brg');
        $ukuran = $this->input->post('ukuran');
        $deskripsi = $this->input->post('deskripsi');
        $tgl_upload = $this->input->post('tgl_upload');
        $jb = $this->input->post('jb');

        //Jika Ada gambar di upload
        $upload_image = $_FILES['img_brg']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|png|jpg|jpeg';
            $config['upload_path'] = './uploads/img_brg/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('img_brg')) {
                $data['brg2'] = $this->db->get_where('tbl_brg', ['kd_brg' => $kd_brg])->row_array();
                $old_image = $data['brg2']['img_brg'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'uploads/img_brg/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('img_brg', $new_image);
            }else {
                echo $this->upload->display_errors();
            }
        } 

        $this->db->set('nm_brg', $nm_brg);
        $this->db->set('hrg_brg', $hrg_brg);
        $this->db->set('ukuran', $ukuran);
        $this->db->set('deskripsi', $deskripsi);
        $this->db->set('tgl_upload', $tgl_upload);
        $this->db->set('jb', $jb);
        $this->db->where('kd_brg', $kd_brg);
        $this->db->update('tbl_brg');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('Barang');
    }
	public function delete($id)
    {
        $this->BarangModel->deleteBrg($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Barang');
    }
}


?>