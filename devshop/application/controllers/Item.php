<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->model(['item_m', 'kategori_m', 'unit_m']); 
	}

	public function index()
	{ 
         $data['row'] = $this->item_m->get();
		$this->template->load('admin/template','admin/product/data_item', $data);
	}
    
    public function del($id)
    {
		$this->item_m->del($id);

		if($this->db->affected_rows() > 0){
			echo "<script>alert('data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('item')."';</script>";
    }

	public function add(){
		$item = new stdClass();
		$item ->id_item = null;
		$item ->kode = null;
        $item ->nama = null;
        $item ->harga = null;

        $kategori =$this->kategori_m->get();
        $unit =$this->unit_m->get();

		$data = array(
			'page'=> 'add',
			'row'=> $item,
            'kategori'=>$kategori,
            'unit'=>$unit
		);

		$this->template->load('admin/template','admin/product/form_item', $data);
	}
	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->item_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->item_m->edit($post);
		}
		if($this->db->affected_rows() > 0){
			echo "<script>alert('data berhasil disimpan');</script>";
		}
		echo "<script>window.location='".site_url('item')."';</script>";
	}

	public function edit($id){
		$query = $this->item_m->get($id);
		if($query->num_rows() > 0){
			$item = $query->row();
			$kategori =$this->kategori_m->get();
            $unit =$this->unit_m->get();

            $data = array(
                'page'=> 'edit',
                'row'=> $item,
                'kategori'=>$kategori,
                'unit'=>$unit
            );
			$this->template->load('admin/template','admin/product/form_item', $data);
		}else{
			echo "<script>alert('Data Tidak Ditemukan');</script>";
			echo "<script>window.location='".site_url('item')."';</script>";
		}
	}
	
}
