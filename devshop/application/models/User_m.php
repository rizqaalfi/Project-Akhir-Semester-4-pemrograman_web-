<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {
    function login(){ //merupakan pendeklarasian function dalam class
        $this->db->select('*'); //untuk menyeleksi satu atau bebrapa field saja pada suatu query
        $this->db->from('user'); //untuk memilih table yang akan di SELECT
        $this->db->join('grup', 'user.grup = grup.id'); //untuk menggabungkan beberapa tabel
        $query = $this->db->get(); //untuk menyeleksi seluruh data pada suatu tabel di database
        return $query; //untuk mengembalikan nilai 
    }
	public function get($id=null)
	{
        $this->db->from('user');
        if($id != null){
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
		
	}

    public function add($post)
    {
        $params['username'] = $post['username'];
        $params['nama'] = $post['nama'];
        $params['password'] = $post['pass'];
        $params['grup'] = $post['level'];
        $this->db->insert('user', $params);
    }

    public function del($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
	}
}
