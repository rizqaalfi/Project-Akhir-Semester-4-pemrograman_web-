<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {
    function login(){ //merupakan pendeklarasian function dalam class
        $this->db->from('tbl_user'); //untuk memilih table yang akan di SELECT
        $this->db->join('tbl_grup', 'tbl_user.grup = tbl_grup.id'); //untuk menggabungkan beberapa tabel
        $query = $this->db->get(); //untuk menyeleksi seluruh data pada suatu tabel di database
        return $query; //untuk mengembalikan nilai 
    }
	public function get($id=null)
	{
        $this->db->from('tbl_user');
        if($id != null){
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
		
	}

    public function add($post)
    {
        $params['username'] = $post['username'];
        $params['email'] = $post['email'];
        $params['password'] = $post['pass'];
        $params['grup'] = $post['level'];
        $this->db->insert('tbl_user', $params);
    }

    public function del($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('tbl_user');
	}
}
