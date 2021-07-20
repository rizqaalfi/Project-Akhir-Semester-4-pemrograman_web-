<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_m extends CI_Model {
	public function get($id=null)
	{
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kategori=tbl_produk.kategori_prd');
        
        if($id != null){
            $this->db->where('id_prd', $id);
            
        }
        $this->db->order_by('id_prd', 'asc');
        $query = $this->db->get();
        return $query;
		
	}
    public function del($id)
	{
		$this->db->where('id_prd', $id);
		$this->db->delete('tbl_produk');
	}

    public function add($post){
        $params = [
            'id_prd'=> $post['kode'],
            'nama_prd'=> $post['nama'],
            'kategori_prd'=> $post['kategori'],
            'id'=> $post['unit'],
            'harga_prd'=> $post['harga'],
            'gambar_prd'=> $post['gambar_prd'],
        ];
        $this->db->insert('tbl_produk', $params);
    }

    function check_barcode($code, $id = null){
        $this->db->from('tbl_produk');
        $this->db->where('id_prd', $code);
        if($id != null){
            $this->db->where('id_prd !=', $id);
        }
        $query = $this->db->get();
        return $query; 
    }
    public function edit($post){
        $params = [
            'id_prd'=> $post['kode'],
            'nama_prd'=> $post['nama'],
            'kategori_prd'=> $post['kategori'],
            'id'=> $post['unit'],
            'harga_prd'=> $post['harga'],
        ];
        if($post['gambar'] != null){
            $params['gambar_prd'] = $post['gambar'];
        }
        $this->db->where('id_prd', $post['id']);
        $this->db->update('tbl_produk', $params);
    }
    
}