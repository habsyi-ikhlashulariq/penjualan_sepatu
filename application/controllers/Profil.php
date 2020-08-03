<?php
class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('kd_user') ) {
            redirect('Login');
        }else {
        $this->load->model('ProfilModel');
        $this->load->library('form_validation');
        }
    }
    public function index()
    {
        $data['judul'] = 'My Profil';
        $data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();
        $data['content'] = 'profil/index';
        $this->load->view('templates/templates', $data);
    }
    public function uploadPhoto()
    {
        $data['judul'] = 'Upload Photo';
        $data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();

        if ($this->form_validation->run() == FALSE) {
            $data['content'] = 'profl/index';
            $this->load->view('templates/templates', $data);
        
        }else {
            $this->ProfilModel->addPhoto();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('profil');
        }
    }
    public function changePass()
    {
        $data['judul'] = 'Change Password';
        $data['user'] = $this->db->get_where('tbl_login', ['kd_user' => $this->session->userdata('kd_user')])->row_array();

        $this->form_validation->set_rules('pass_lama', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules('pass_baru', 'Password Baru', 'required|trim|matches[confirm_pass]');
        $this->form_validation->set_rules('confirm_pass', 'Ulangi Password', 'required|trim|matches[pass_baru]');

        if ($this->form_validation->run() == FALSE) {
            $data['content'] = 'profil/changePass';
            $this->load->view('templates/templates', $data);
        }else {
            $password_lama = $this->input->post('pass_lama');
            $password_baru = $this->input->post('pass_baru');

            if (!password_verify($password_lama, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Lama Salah</div>');
                redirect('profil/changePass');
            }else {
                if ($password_lama == $password_baru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" 
                    role="alert">Password Baru Tidak Boleh Sama Dengan Password Lama</div>');
                    redirect('profil/changePass');
                }else {
                    //pass
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('kd_user', $this->session->userdata('kd_user'));
                    $this->db->update('tbl_login');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" 
                    role="alert">Anda Berhasil Mengganti Password</div>');
                    redirect('profil');
                }

            }

        }
    }

    public function update()
    {
        $data['judul'] = 'Update Profil';
        $data['user'] = $this->db->get_where('tbl_login', 
        ['nama' => $this->session->userdata('nama')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['content'] = 'profil/update';
            $this->load->view('templates/templates', $data);
        }else {
            $email = $this->input->post('email');
            $nama = $this->input->post('nama');

            //Jika Ada gambar di upload
            $upload_image = $_FILES['foto']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|png|jpg';
                $config['upload_path'] = './assets/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $old_image = $data['user']['avatar'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('avatar', $new_image);
                }else {
                    echo $this->upload->display_errors();
                }
            } 

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('tbl_login');

            $this->session->set_flashdata('message', '<div class="alert alert-success" 
            role="alert">Anda Berhasil Mengupdate Profil</div>');
            redirect('profil');
        }
    }
    
}


?>
