<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Shop_model');
  }

  public function index()
  {
    $this->load->view('login');
  }

  public function cek_log()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $cek = $this->Shop_model->login($username, $password, 'tbl_user')->result();
    if ($cek != FALSE) {
      foreach ($cek as $row) {
        $user = $row->username;
        $grup = $row->grup;
      }

      $this->session->set_userdata('session_user', $user);
      $this->session->set_userdata('session_grup', $grup);

      if ($grup == 1) {
        redirect('Dashboard');
      } else {
        redirect('Home');
      }
    } else {

      $this->load->view('login');
    }
  }
}

/* End of file Auth.php */
