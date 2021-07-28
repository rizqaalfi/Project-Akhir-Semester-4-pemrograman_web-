<?php
class M_data extends CI_Model
{

  public function getData($id = null)
  {

    if ($id === null) {
      return $this->db->get('user')->result_array();
    } else {
      return $this->db->get_where('user', ['id_user' => $id])->result_array();
    }
  }

  public function deleteData($id)
  {
    $this->db->delete('user', ['id_user' => $id]);
    return $this->db->affected_rows();
  }

  public function createData($data)
  {
    $this->db->insert('user', $data);
    return $this->db->affected_rows();
  }

  public function updateData($data, $id)
  {
    $this->db->update('user', $data, ['id_user' => $id]);
    return $this->db->affected_rows();
  }
}
