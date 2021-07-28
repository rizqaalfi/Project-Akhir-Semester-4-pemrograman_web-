<?php
class M_keranjang extends CI_Model
{

  public function getData($id = null)
  {

    if ($id === null) {
      return $this->db->get('tbl_keranjang')->result_array();
    } else {
      return $this->db->get_where('tbl_keranjang', ['id_keranjang' => $id])->result_array();
    }
  }

  public function deleteData($id)
  {
    $this->db->delete('tbl_keranjang', ['id_keranjang' => $id]);
    return $this->db->affected_rows();
  }

  public function createData($data)
  {
    $this->db->insert('tbl_keranjang', $data);
    return $this->db->affected_rows();
  }
}
