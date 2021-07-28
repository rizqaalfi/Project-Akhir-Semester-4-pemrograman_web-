<?php
class M_user extends CI_Model
{

  public function getData($id = null)
  {

    if ($id === null) {
      return $this->db->get('tbl_user')->result_array();
    } else {
      return $this->db->get_where('tbl_user', ['id_user' => $id])->result_array();
    }
  }

  public function createData($data)
  {
    $this->db->insert('tbl_user', $data);
    return $this->db->affected_rows();
  }

  public function updateData($data, $id)
  {
    $this->db->update('tbl_user', $data, ['id_user' => $id]);
    return $this->db->affected_rows();
  }
}
