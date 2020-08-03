<?php


class UserModel extends CI_Model
{
    public function countUsr()
    {
        $sql = "SELECT count(kd_user) as kd_user FROM tbl_login";
        $result = $this->db->query($sql);
        return $result->row()->kd_user;
    }
    public function getAllUser()
    {
        $query = $this->db->get('tbl_login')->result_array();
        return $query;
    }
    public function getUserbyId($id)
    {
        $query = $this->db->get_where('tbl_login',['kd_user'=>$id])->row_array();
        return $query;
    }
    public function addUser()
    {
       $data = [
           "kd_user" => $this->input->post('kd_user'),
           "nama" => $this->input->post('nama'),
           "email" => $this->input->post('email'),
           "password" => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
           "avatar" => $this->input->post('avatar')
       ];
       $this->db->insert('tbl_login', $data);
    }
    public function deleteUser($id)
    {
        $this->db->where('kd_user', $id);
        $this->db->delete('tbl_login');
    }

    public function searchBrg()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('kd_user', $keyword);
        $this->db->or_like('nama', $keyword);

        $query = $this->db->get('tbl_login')->result_array();
        return $query;
    }
    public function searchUser()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('kd_user', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('email', $keyword);

        $query = $this->db->get('tbl_login')->result_array();
        return $query;
    }
    
}

?>