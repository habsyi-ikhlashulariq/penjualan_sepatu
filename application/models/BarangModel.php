<?php


class BarangModel extends CI_Model
{
    public function countBrg()
    {
        $sql = "SELECT count(kd_brg) as kd_brg FROM tbl_brg";
        $result = $this->db->query($sql);
        return $result->row()->kd_brg;
    }
    public function getAllBrg()
    {
        $query = $this->db->get('tbl_brg')->result_array();
        return $query;
    }
    public function getBrgbyId($id)
    {
        $query = $this->db->get_where('tbl_brg',['kd_brg'=>$id])->row_array();
        return $query;
    }
    public function addBrg($data,$table)
    {
       $this->db->insert($table, $data);
    }
    public function deleteBrg($id)
    {
        $this->db->where('kd_brg', $id);
        $this->db->delete('tbl_brg');
    }
public function searchBrg()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('kd_brg', $keyword);
        $this->db->or_like('nm_brg', $keyword);

        $query = $this->db->get('tbl_brg')->result_array();
        return $query;
    }    
}

?>