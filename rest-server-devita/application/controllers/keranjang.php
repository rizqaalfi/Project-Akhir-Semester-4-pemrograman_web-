<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

use chriskacerguis\RestServer\RestController;

class Keranjang extends RestController
{
  function __construct()
  {
    // Construct the parent class
    parent::__construct();

    // sructure : $this->load->model('nama model', 'nama alias');
    $this->load->model('m_keranjang', 'data');
  }

  public function index_get()
  {
    $id = $this->get('id_keranjang');
    if ($id === null) {
      $data = $this->data->getData();
    } else {
      $data = $this->data->getData($id);
    }

    if ($data) {
      $this->response([
        'status' => true,
        'message' => $data
      ], RestController::HTTP_OK);
    } else {
      $this->response([
        'status' => false,
        'message' => 'ID not Found'
      ], RestController::HTTP_NOT_FOUND);
    }
  }

  public function index_delete()
  {
    $id = $this->delete('id_keranjang');

    if ($id === null) {
      $this->response([
        'status' => false,
        'message' => 'Provide an ID'
      ], RestController::HTTP_BAD_REQUEST);
    } else {
      if ($this->data->deleteData($id) > 0) {
        $this->response([
          'status' => true,
          'id' => $id,
          'message' => 'Deleted'
        ], RestController::HTTP_OK);
      } else {
        $this->response([
          'status' => false,
          'message' => 'id Not Found'
        ], RestController::HTTP_BAD_REQUEST);
      }
    }
  }

  public function index_post()
  {
    $data = [
      'qty' => $this->post('qty'),
      'id_prd' => $this->post('id_prd'),
      'harga_prd' => $this->post('harga_prd'),
      'nama_prd' => $this->post('nama_prd'),
      'username' => $this->post('username'),
      'id_keranjang' => $this->post('id_keranjang'),
      'ukuran_prd' => $this->post('ukuran_prd')
    ];

    if ($this->data->createData($data) > 0) {

      $this->response([
        'status' => true,
        'message' => 'New data has been created'
      ], RestController::HTTP_CREATED);
    } else {
      $this->response([
        'status' => false,
        'message' => 'Failed to create new data'
      ], RestController::HTTP_BAD_REQUEST);
    }
  }
}
