<?php
class M_pelanggan extends CI_Model
{

  public function getData($id = null)
  {

    if ($id === null) {
      return $this->db->get('tbl_pelanggan')->result_array();
    } else {
      return $this->db->get_where('tbl_pelanggan', ['kode_plg' => $id])->result_array();
    }
  }

  public function createData($data)
  {
    $this->db->insert('tbl_pelanggan', $data);
    return $this->db->affected_rows();
  }

  public function updateData($data, $id)
  {
    $this->db->update('tbl_pelanggan', $data, ['kode_plg' => $id]);
    return $this->db->affected_rows();
  }
}
