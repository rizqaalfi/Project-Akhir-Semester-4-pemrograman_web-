<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_m extends CI_Model {
	public function get($id=null)
	{
        $this->db->from('tbl_kategori');
        if($id != null){
            $this->db->where('id_kategori', $id);
        }
        $query = $this->db->get();
        return $query;
		
	}
    public function del($id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->delete('tbl_kategori');
	}

    public function add($post){
        $params = [
            'nama_kategori'=> $post['nama'],
            
        ];
        $this->db->insert('tbl_kategori', $params);
    }

    public function edit($post){
        $params = [
            'nama_kategori'=> $post['nama'],
        ];
        $this->db->where('id_kategori', $post['id']);
        $this->db->update('tbl_kategori', $params);
    }
    
}