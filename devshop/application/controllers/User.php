<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_m'); 
	}

	public function index()
	{
        $data['row'] = $this->user_m->get();

		$this->template->load('admin/template','admin/user/data_user', $data);
	}

	public function add(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[pass]',
			array('matches' => '%s tidak sesuai dengan password')
		);
		$this->form_validation->set_rules('level', 'grup', 'required');
		
		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length', '(field) minimal 8 karakter');
		$this->form_validation->set_message('is_unique', '%s(field) username sudah dipakai, silahkan pakai username lain');

		if ($this->form_validation->run() == FALSE){
            $this->template->load('admin/template','admin/user/add_user');
        } else {
        	$post = $this->input->post(null, TRUE);
			$this->user_m->add($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('data berhasil disimpan');</script>";
			}
			echo "<script>window.location='".site_url('user')."';</script>";
        }	
	}

	public function del()
	{
		$id = $this->input->post('id');
		$this->user_m->del($id);

		if($this->db->affected_rows() > 0){
			echo "<script>alert('data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('user')."';</script>";
	}

}
