<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_m'); 
	}

	public function index()
	{ 
         $data['row'] = $this->pelanggan_m->get();
		$this->template->load('admin/template','admin/pelanggan/data_pelanggan', $data);
	}
    
    public function del($id)
    {
		$this->pelanggan_m->del($id);

		if($this->db->affected_rows() > 0){
			echo "<script>alert('data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('pelanggan')."';</script>";
    }

	public function add(){
		$pelanggan = new stdClass();
		$pelanggan ->id_pelanggan = null;
		$pelanggan ->pelanggan = null;
		$data = array(
			'page'=> 'add',
			'row'=> $pelanggan
		);

		$this->template->load('admin/template','admin/pelanggan/form_pelanggan', $data);
	}
	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->pelanggan_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->pelanggan_m->edit($post);
		}
		if($this->db->affected_rows() > 0){
			echo "<script>alert('data berhasil disimpan');</script>";
		}
		echo "<script>window.location='".site_url('pelanggan')."';</script>";
	}

	public function edit($id){
		$query = $this->pelanggan_m->get($id);
		if($query->num_rows() > 0){
			$pelanggan = $query->row();
			$data = array(
				'page'=> 'edit',
				'row'=> $pelanggan
			);	
			$this->template->load('admin/template','admin/pelanggan/form_pelanggan', $data);
		}else{
			echo "<script>alert('Data Tidak Ditemukan');</script>";
			echo "<script>window.location='".site_url('pelanggan')."';</script>";
		}
	}
	
}
