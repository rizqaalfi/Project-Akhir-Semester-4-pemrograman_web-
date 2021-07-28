<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

use chriskacerguis\RestServer\RestController;

class User extends RestController
{
  function __construct()
  {
    // Construct the parent class
    parent::__construct();

    // sructure : $this->load->model('nama model', 'nama alias');
    $this->load->model('m_user', 'data');
  }

  public function index_get()
  {
    $id = $this->get('id');
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
      'username' => $this->post('username'),
      'email' => $this->post('email'),
      'password' => $this->post('password'),
      'grup' => $this->post(2)
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

    $id = $this->put('id_user');
    $data = [
      'username' => $this->put('username'),
      'email' => $this->put('email'),
      'password' => $this->put('password'),
      'grup' => $this->put(2)
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
