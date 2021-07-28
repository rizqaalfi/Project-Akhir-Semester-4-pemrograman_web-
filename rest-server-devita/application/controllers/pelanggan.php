<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

use chriskacerguis\RestServer\RestController;

class Pelanggan extends RestController
{
  function __construct()
  {
    // Construct the parent class
    parent::__construct();

    // sructure : $this->load->model('nama model', 'nama alias');
    $this->load->model('m_pelanggan', 'data');
  }

  public function index_get()
  {
    $id = $this->get('kode_plg');
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

  public function index_post()
  {
    $data = [
      'kode_plg' => $this->post('kode_plg'),
      'nama_plg' => $this->post('nama_plg'),
      'gender_plg' => $this->post('gender_plg'),
      'email_plg' => $this->post('email_plg'),
      'pembayaran_plg' => $this->post('pembayaran_plg'),
      'jasa_kirim' => $this->post('jasa_kirim'),
      'alamat_plg' => $this->post('alamat_plg')
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

  public function index_put()
  {

    $id = $this->put('kode_plg');
    $data = [
      'nama_plg' => $this->put('nama_plg'),
      'gender_plg' => $this->put('gender_plg'),
      'email_plg' => $this->put('email_plg'),
      'pembayaran_plg' => $this->put('pembayaran_plg'),
      'jasa_kirim' => $this->put('jasa_kirim'),
      'alamat_plg' => $this->put('alamat_plg')
    ];
    if ($this->data->updateData($data, $id) > 0) {

      $this->response([
        'status' => true,
        'message' => 'data has been modeified'
      ], RestController::HTTP_OK);
    } else {
      $this->response([
        'status' => false,
        'message' => 'Failed to modify data'
      ], RestController::HTTP_NOT_MODIFIED);
    }
  }
}
