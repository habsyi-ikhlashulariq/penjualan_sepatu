<?php 
class TampilModel extends CI_Model
{
    public function header()
    {
        $query = $this->db->get('tbl_header')->result_array();
        return $query;
    }
    public function jb()
    {
        $query = $this->db->get('tbl_jenisbrg')->result_array();
        return $query;
    }
    public function slide_title()
    {
        $this->db->limit('3');
        $query = $this->db->get('tbl_jenisbrg')->result_array();
        return $query;
    }
    public function slide1()
    {
        $this->db->limit('4');
        $query = $this->db->get_where('tbl_brg',['jb'=>1])->result_array();
        return $query;
    }
    public function slide2()
    {
        $this->db->limit('4');
        $query = $this->db->get_where('tbl_brg',['jb'=>2])->result_array();
        return $query;
    }
    public function slide3()
    {
        $this->db->limit('4');
        $query = $this->db->get_where('tbl_brg',['jb'=>3])->result_array();
        return $query;
    }
    public function produk_baru()
    {
        $this->db->limit('2');
        $this->db->order_by('kd_brg','DESC');
        $query = $this->db->get('tbl_brg')->result_array();
        return $query;
    }
    public function gethargarendah()
    {
        $this->db->order_by('hrg_brg','ASC');
        $query = $this->db->get('tbl_brg')->result_array();
        return $query;
    }
    public function gethargatinggi()
    {
        $this->db->order_by('hrg_brg','DESC');
        $query = $this->db->get('tbl_brg')->result_array();
        return $query;
    }
    public function getBrgbyId($id)
    {
        $query = $this->db->get_where('tbl_brg',['jb'=>$id])->result_array();
        return $query;
    }
    public function detail($id)
    {
        $query = $this->db->get_where('tbl_brg',['kd_brg'=>$id])->result_array();
        return $query;
    }
    public function rekom($id)
    {
        $this->db->limit('3');
        $query = $this->db->get_where('tbl_brg',['jb'=>$id])->result_array();
        return $query;
    }
    public function brg()
    {
        $query = $this->db->get('tbl_brg')->result_array();
        return $query;
    }
    public function marketplace()
    {
        $query = $this->db->get('tbl_marketplace')->result_array();
        return $query;
    }
    public function kontak()
    {
        $query = $this->db->get('tbl_kontak')->result_array();
        return $query;
    }
    public function sosmed()
    {
        $query = $this->db->get('tbl_sosmed')->result_array();
        return $query;
    }
    public function footer()
    {
        $query = $this->db->get('tbl_footer')->result_array();
        return $query;
    }
    public function countBrg()
    {
        $query = $this->db->get('tbl_brg')->num_rows();
        return $query;
    }
    public function getbrg($limit, $start, $keyword=null)
    {
        if ($keyword) {
            $this->db->like('nm_brg', $keyword);
        }
        $query = $this->db->get('tbl_brg', $limit, $start)->result_array();
        return $query;
    }
    
}



?>