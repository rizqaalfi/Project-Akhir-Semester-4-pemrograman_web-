<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_m extends CI_Model {
	public function get($id=null)
	{
        $this->db->from('item');
        $this->db->join('kategori', 'kategori.id_kategori=item.id_kategori');
        $this->db->join('unit', 'unit.id=item.id');
        if($id != null){
            $this->db->where('id_item', $id);
            
        }
        $this->db->order_by('kode', 'asc');
        $query = $this->db->get();
        return $query;
		
	}
    public function del($id)
	{
		$this->db->where('id_item', $id);
		$this->db->delete('item');
	}

    public function add($post){
        $params = [
            'kode'=> $post['kode'],
            'nama'=> $post['nama'],
            'id_kategori'=> $post['kategori'],
            'id'=> $post['unit'],
            'harga'=> $post['harga'],
            'gambar'=> $post['gambar'],
        ];
        $this->db->insert('item', $params);
    }

    function check_barcode($code, $id = null){
        $this->db->from('item');
        $this->db->where('kode', $code);
        if($id != null){
            $this->db->where('id_item !=', $id);
        }
        $query = $this->db->get();
        return $query; 
    }
    public function edit($post){
        $params = [
            'kode'=> $post['kode'],
            'nama'=> $post['nama'],
            'id_kategori'=> $post['kategori'],
            'id'=> $post['unit'],
            'harga'=> $post['harga'],
        ];
        if($post['gambar'] != null){
            $params['gambar'] = $post['gambar'];
        }
        $this->db->where('id_item', $post['id']);
        $this->db->update('item', $params);
    }
    
}