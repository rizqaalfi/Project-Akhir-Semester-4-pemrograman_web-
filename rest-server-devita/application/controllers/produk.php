<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

use chriskacerguis\RestServer\RestController;

class Produk extends RestController
{
  function __construct()
  {
    // Construct the parent class
    parent::__construct();

    // sructure : $this->load->model('nama model', 'nama alias');
    $this->load->model('m_produk', 'data');
  }

  // ambil semua produk
  public function index_get()
  {
    $id = $this->get('id_prd');
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
}
