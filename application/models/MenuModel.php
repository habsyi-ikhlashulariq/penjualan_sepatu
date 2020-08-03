<?php 

 class MenuModel extends CI_Model
 {
    //header
     public function getAllMenuHeader()
     {
         $query = $this->db->get('tbl_header')->result_array();
         return $query;
     }
     public function addMenuHeader()
     {
        $data = [
            "kd_menu" => $this->input->post('kd_menu'),
            "nm_menu" => $this->input->post('nama'),
            "link" => $this->input->post('link'),
        ];
        $this->db->insert('tbl_header', $data);
     }
     public function updateMenuHeader($id)
     {
         $data = [
             "kd_menu" => $this->input->post('kd_menu'),
             "nm_menu" => $this->input->post('nama'),
             "link" => $this->input->post('link'),
         ];
         $this->db->where('kd_menu', $this->input->post('kd_menu'));
         $this->db->update('tbl_header', $data);
     }

     public function getMenuHeaderbyId($id)
     {
        $query = $this->db->get_where('tbl_header',['kd_menu'=>$id])->row_array();
        return $query;
     }
     public function deleteMenuHeader($id)
     {
         $this->db->where('kd_menu', $id);
         $this->db->delete('tbl_header');
     }
     public function searchHeader()
     {
         $keyword = $this->input->post('keyword', true);
         $this->db->like('kd_menu', $keyword);
         $this->db->or_like('nm_menu', $keyword);
 
         $query = $this->db->get('tbl_header')->result_array();
         return $query;
     }

     //marketplace
     public function getAllMenuMarketplace()
     {
         $query = $this->db->get('tbl_marketplace')->result_array();
         return $query;
     }
     public function addMenuMarketplace()
     {
        $data = [
            "kd_menu" => $this->input->post('kd_menu'),
            "img_marketplace" => $this->input->post('nama'),
            "link" => $this->input->post('link')
        ];
        $this->db->insert('tbl_marketplace', $data);
     }

     public function getMenuMarketplacebyId($id)
     {
        $query = $this->db->get_where('tbl_marketplace',['kd_menu'=>$id])->row_array();
        return $query;
     }
     public function updateMenuMarketplace($id)
     {
         $data = [
            "kd_menu" => $this->input->post('kd_menu'),
            "img_marketplace" => $this->input->post('nama'),
            "link" => $this->input->post('link')
         ];
         $this->db->where('kd_menu', $this->input->post('kd_menu'));
         $this->db->update('tbl_marketplace', $data);
     }
     public function deleteMenuMarketplace($id)
     {
         $this->db->where('kd_menu', $id);
         $this->db->delete('tbl_marketplace');
     }
     public function searchMarketplace()
     {
         $keyword = $this->input->post('keyword', true);
         $this->db->like('kd_menu', $keyword);
         $this->db->or_like('img_marketplace', $keyword);
 
         $query = $this->db->get('tbl_marketplace')->result_array();
         return $query;
     }

     //Kontak
     public function getAllMenuKontak()
     {
         $query = $this->db->get('tbl_kontak')->result_array();
         return $query;
     }
     public function addMenuKontak()
     {
        $data = [
            "kd_menu" => $this->input->post('kd_menu'),
            "alamat" => $this->input->post('alamat'),
            "no_telp" => $this->input->post('no_telp'),
            "email" => $this->input->post('email')
        ];
        $this->db->insert('tbl_kontak', $data);
     }
     public function updateMenuKontak($id)
     {
         $data = [
            "kd_menu" => $this->input->post('kd_menu'),
            "alamat" => $this->input->post('alamat'),
            "no_telp" => $this->input->post('no_telp'),
            "email" => $this->input->post('email')
         ];
         $this->db->where('kd_menu', $this->input->post('kd_menu'));
         $this->db->update('tbl_kontak', $data);
     }
     public function getMenuKontakbyId($id)
     {
        $query = $this->db->get_where('tbl_kontak',['kd_menu'=>$id])->row_array();
        return $query;
     }
     public function deleteMenuKontak($id)
     {
         $this->db->where('kd_menu', $id);
         $this->db->delete('tbl_kontak');
     }
     public function searchKontak()
     {
         $keyword = $this->input->post('keyword', true);
         $this->db->like('kd_menu', $keyword);
         $this->db->or_like('alamat', $keyword);
         $this->db->or_like('no_telp', $keyword);
         $this->db->or_like('email', $keyword);
 
         $query = $this->db->get('tbl_kontak')->result_array();
         return $query;
     }

     //sosmed
     public function getAllMenuSosmed()
     {
         $query = $this->db->get('tbl_sosmed')->result_array();
         return $query;
     }
     public function addMenuSosmed()
     {
        $data = [
            "kd_menu" => $this->input->post('kd_menu'),
            "nama" => $this->input->post('nama'),
            "class" => $this->input->post('class'),
            "link" => $this->input->post('link')
        ];
        $this->db->insert('tbl_sosmed', $data);
     }
     public function updateMenuSosmed($id)
     {
         $data = [
            "kd_menu" => $this->input->post('kd_menu'),
            "nama" => $this->input->post('nama'),
            "class" => $this->input->post('class'),
            "link" => $this->input->post('link')
         ];
         $this->db->where('kd_menu', $this->input->post('kd_menu'));
         $this->db->update('tbl_sosmed', $data);
     }
     public function getMenuSosmedbyId($id)
     {
        $query = $this->db->get_where('tbl_sosmed',['kd_menu'=>$id])->row_array();
        return $query;
     }
     public function deleteMenuSosmed($id)
     {
         $this->db->where('kd_menu', $id);
         $this->db->delete('tbl_sosmed');
     }
     public function searchSosmed()
     {
         $keyword = $this->input->post('keyword', true);
         $this->db->like('kd_menu', $keyword);
         
         $query = $this->db->get('tbl_sosmed')->result_array();
         return $query;
     }

     //Footer
     public function getAllMenuFooter()
     {
         $query = $this->db->get('tbl_footer')->result_array();
         return $query;
     }
     public function addMenuFooter()
     {
        $data = [
            "kd_menu" => $this->input->post('kd_menu'),
            "menu_footer" => $this->input->post('menu_footer')
        ];
        $this->db->insert('tbl_footer', $data);
     }

     public function getMenuFooterbyId($id)
     {
        $query = $this->db->get_where('tbl_footer',['kd_menu'=>$id])->row_array();
        return $query;
     }
     public function updateMenuFooter($id)
     {
         $data = [
            "kd_menu" => $this->input->post('kd_menu'),
            "menu_footer" => $this->input->post('menu_footer')
         ];
         $this->db->where('kd_menu', $this->input->post('kd_menu'));
         $this->db->update('tbl_footer', $data);
     }
     public function deleteMenuFooter($id)
     {
         $this->db->where('kd_menu', $id);
         $this->db->delete('tbl_footer');
     }
     public function searchFooter()
     {
         $keyword = $this->input->post('keyword', true);
         $this->db->like('kd_menu', $keyword);
         $this->db->or_like('menu_footer', $keyword);

         $query = $this->db->get('tbl_footer')->result_array();
         return $query;
     }
  
 }
 

?>