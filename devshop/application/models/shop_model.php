<?php
class Shop_model extends ci_model
{
  public function getAllProduct()
  {
    $this->db->select('*');
    $this->db->from('tbl_produk');
    $query = $this->db->get();
    return $query;

    // mengasilkan SELECT * FROM tm_user JOIN tm_grup ON tm_user.grup = tm_grup.id_grup
  }

  public function getProductDetails($where, $table)
  {
    $this->db->get_where($table, $where);
    $this->db->select('*');
    $this->db->from($table);
    $this->db->join('tbl_ukuranprd', 'tbl_produk.id_prd = tbl_ukuranprd.id_prd');
    $query = $this->db->get();
    return $query;
  }

  // input data dengan parameter $data dan $table ( urutannya harus sama dengan yang ada di controller )
  function input_data($data, $table)
  {
    $this->db->insert($table, $data);
    // menghasilkan INSERT INTO $table VALUES $data
    // $table merupakan array yang diabil dari parameter -> di controller
  }

  function edit_data($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  function login($user, $pass, $table)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $user);
    $this->db->where('password', $pass);
    $query = $this->db->get();
    return $query;
  }
}
