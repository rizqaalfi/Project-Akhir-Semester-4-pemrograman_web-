<?php
class M_produk extends CI_Model
{

  public function getData($id = null)
  {

    if ($id === null) {
      return $this->db->get('tbl_produk')->result_array();
    } else {
      return $this->db->get_where('tbl_produk', ['id_prd' => $id])->result_array();
    }
  }
}
