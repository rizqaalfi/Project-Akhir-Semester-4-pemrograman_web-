<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class unit_m extends CI_Model {
	public function get($id=null)
	{
        $this->db->from('unit');
        if($id != null){
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
		
	}
    public function del($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('unit');
	}

    public function add($post){
        $params = [
            'unit'=> $post['nama'],
        ];
        $this->db->insert('unit', $params);
    }

    public function edit($post){
        $params = [
            'unit'=> $post['nama'],
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('unit', $params);
    }
    
}