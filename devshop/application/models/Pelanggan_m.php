<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_m extends CI_Model {
	public function get($id=null)
	{
        $this->db->from('tbl_pelanggan');
        if($id != null){
            $this->db->where('id_pelanggan', $id);
        }
        $query = $this->db->get();
        return $query;
		
	}
    public function del($id)
	{
		$this->db->where('id_pelanggan', $id);
		$this->db->delete('pelanggan');
	}

    public function add($post){
        $params = [
            'nama_plg'=> $post['nama'],
            
        ];
        $this->db->insert('pelanggan', $params);
    }

    public function edit($post){
        $params = [
            'nama_plg'=> $post['nama'],
        ];
        $this->db->where('id_pelanggan', $post['id']);
        $this->db->update('pelanggan', $params);
    }
    
}