 <?php
  defined('BASEPATH') or exit('No direct script access allowed');
  require FCPATH . 'vendor/autoload.php';

  use chriskacerguis\RestServer\RestController;

  class Home extends RestController
  {
    function __construct()
    {
      // Construct the parent class
      parent::__construct();

      // sructure : $this->load->model('nama model', 'nama alias');
      $this->load->model('m_data', 'data');

      // limitnya permethod perjam peruser
      $this->methods['index_get']['limit'] = 2;

      // $this->methods['index_delete']['limit'] = 2; //bisa untuk methode yang lain
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

    //  endpoint yang digunakan sama, tapi request methodnya delete
    public function index_delete()
    {
      $id = $this->delete('id');

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
        'NamaLengkap' => $this->post('NamaLengkap'),
        'email' => $this->post('email'),
        'password' => $this->post('password'),
        'keterangan' => $this->post('keterangan'),
        'level' => $this->post('level')
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
        'NamaLengkap' => $this->put('NamaLengkap'),
        'email' => $this->put('email'),
        'password' => $this->put('password'),
        'keterangan' => $this->put('keterangan'),
        'level' => $this->put('level')
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
