<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_m extends CI_Model {
	public function get($id=null)
	{
        $this->db->from('supplier');
        if($id != null){
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
		
	}
    public function del($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('supplier');
	}

    public function add($post){
        $params = [
            'nama'=> $post['nama'],
            'no_telp'=> $post['phone'],
            'alamat'=> $post['address'],
            'deskripsi'=> $post['des'],
        ];
        $this->db->insert('supplier', $params);
    }

    public function edit($post){
        $params = [
            'nama'=> $post['nama'],
            'no_telp'=> $post['phone'],
            'alamat'=> $post['address'],
            'deskripsi'=> $post['des'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('supplier', $params);
    }
    
}