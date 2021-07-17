<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->model('supplier_m'); 
	}

	public function index()
	{ 
         $data['row'] = $this->supplier_m->get();
		$this->template->load('admin/template','admin/supplier/data_supplier', $data);
	}
    
    public function del($id)
    {
		$this->supplier_m->del($id);

		if($this->db->affected_rows() > 0){
			echo "<script>alert('data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('supplier')."';</script>";
    }

	public function add(){
		$supplier = new stdClass();
		$supplier ->id = null;
		$supplier ->nama = null;
		$supplier ->no_telp = null;
		$supplier ->alamat = null;
		$supplier ->deskripsi = null;
		$data = array(
			'page'=> 'add',
			'row'=> $supplier
		);

		$this->template->load('admin/template','admin/supplier/form_supplier', $data);
	}
	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->supplier_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->supplier_m->edit($post);
		}
		if($this->db->affected_rows() > 0){
			echo "<script>alert('data berhasil disimpan');</script>";
		}
		echo "<script>window.location='".site_url('supplier')."';</script>";
	}

	public function edit($id){
		$query = $this->supplier_m->get($id);
		if($query->num_rows() > 0){
			$supplier = $query->row();
			$data = array(
				'page'=> 'edit',
				'row'=> $supplier
			);	
			$this->template->load('admin/template','admin/supplier/form_supplier', $data);
		}else{
			echo "<script>alert('Data Tidak Ditemukan');</script>";
			echo "<script>window.location='".site_url('supplier')."';</script>";
		}
	}
	
}
