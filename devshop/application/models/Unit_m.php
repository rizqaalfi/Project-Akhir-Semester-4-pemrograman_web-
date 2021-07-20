<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class unit_m extends CI_Model {
	public function get($id=null)
	{
        $this->db->from('tbl_unit');
        if($id != null){
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
		
	}
    public function del($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_unit');
	}

    public function add($post){
        $params = [
            'unit'=> $post['nama'],
        ];
        $this->db->insert('tbl_unit', $params);
    }

    public function edit($post){
        $params = [
            'unit'=> $post['nama'],
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('tbl_unit', $params);
    }
    
}