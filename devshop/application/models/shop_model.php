<?php
class Shop_model extends ci_model
{
  public function getAllProduct()
  {
    $this->db->select('*');
    $this->db->from('tbl_produk');
    $this->db->join('tbl_kategori', 'tbl_produk.kategori_prd = tbl_kategori.id_kategori');
    $query = $this->db->get();
    return $query;
  }

  public function getProductDetails($where, $table)
  {
    $this->db->where($where);
    $this->db->select('*');
    $this->db->from($table);
    $query = $this->db->get();
    return $query;
  }

  public function getKategori($where, $table)
  {
    $this->db->where($where);
    $this->db->select('*');
    $this->db->from($table);
    $query = $this->db->get();
    return $query;
  }

  function login($user, $pass, $table)
  {
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where('username', $user);
    $this->db->where('password', $pass);
    $query = $this->db->get();
    return $query;
  }

  function addCart($data, $table)
  {
    $this->db->insert($table, $data);
  }

  function getCart($where, $table)
  {
    $this->db->where($where);
    $this->db->select('*');
    $this->db->from($table);
    $this->db->join('tbl_produk', 'tbl_produk.id_prd = ' . $table . '.id_prd');
    $query = $this->db->get();
    return $query;
  }

  function delCart($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
}
