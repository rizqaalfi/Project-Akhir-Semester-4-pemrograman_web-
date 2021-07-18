<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->model('unit_m'); 
	}

	public function index()
	{ 
         $data['row'] = $this->unit_m->get();
		$this->template->load('admin/template','admin/product/data_unit', $data);
	}
    
    public function del($id)
    {
		$this->unit_m->del($id);

		if($this->db->affected_rows() > 0){
			echo "<script>alert('data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('unit')."';</script>";
    }

	public function add(){
		$supplier = new stdClass();
		$supplier ->id = null;
		$supplier ->unit = null;
		$data = array(
			'page'=> 'add',
			'row'=> $supplier
		);

		$this->template->load('admin/template','admin/product/form_unit', $data);
	}
	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->unit_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->unit_m->edit($post);
		}
		if($this->db->affected_rows() > 0){
			echo "<script>alert('data berhasil disimpan');</script>";
		}
		echo "<script>window.location='".site_url('unit')."';</script>";
	}

	public function edit($id){
		$query = $this->unit_m->get($id);
		if($query->num_rows() > 0){
			$unit = $query->row();
			$data = array(
				'page'=> 'edit',
				'row'=> $unit
			);	
			$this->template->load('admin/template','admin/product/form_unit', $data);
		}else{
			echo "<script>alert('Data Tidak Ditemukan');</script>";
			echo "<script>window.location='".site_url('unit')."';</script>";
		}
	}
	
}
