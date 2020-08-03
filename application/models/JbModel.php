<?php 

 class JbModel extends CI_Model
 {
    public function countJb()
    {
        $sql = "SELECT count(kd_jb) as kd_jb FROM tbl_jenisbrg";
        $result = $this->db->query($sql);
        return $result->row()->kd_jb;
    }
     public function getAllJb()
     {
         $query = $this->db->get('tbl_jenisbrg')->result_array();
         return $query;
     }
     public function addJb()
     {
        $data = [
            "kd_jb" => $this->input->post('kd_jb'),
            "jenis_brg" => $this->input->post('nama')
        ];
        $this->db->insert('tbl_jenisbrg', $data);
     }

     public function getJbbyId($id)
     {
        $query = $this->db->get_where('tbl_jenisbrg',['kd_jb'=>$id])->row_array();
        return $query;
     }
     public function updateJb($id)
     {
         $data = [
            "kd_jb" => $this->input->post('kd_jb'),
            "jenis_brg" => $this->input->post('nama'),
         ];
         $this->db->where('kd_jb', $this->input->post('kd_jb'));
         $this->db->update('tbl_jenisbrg', $data);
     }
     public function deleteJb($id)
     {
         $this->db->where('kd_jb', $id);
         $this->db->delete('tbl_jenisbrg');
     }
     public function searchJb()
     {
         $keyword = $this->input->post('keyword', true);
         $this->db->like('kd_jb', $keyword);
         $this->db->or_like('jenis_brg', $keyword);
 
         $query = $this->db->get('tbl_jenisbrg')->result_array();
         return $query;
     }
  
 }
 

?>