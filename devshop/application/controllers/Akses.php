<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akses extends CI_Controller {

	public function login()
	{
		$this->load->view('login');
	}

	public function proses()
	{
		echo "haii";
	}
}
