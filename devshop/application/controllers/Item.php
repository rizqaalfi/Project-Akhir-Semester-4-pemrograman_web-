<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->model(['item_m', 'kategori_m']); 
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
		$item ->id_prd= null;
        $item ->nama_prd = null;
        $item ->harga_prd = null;
		$item ->id_kategori = null;
		$item ->id = null;
		$item ->stok_prd = null;
		$item ->S = null;
		$item ->M = null;
		$item ->L = null;
		$item ->XL = null;
		$item ->deskripsi_prd = null;
		$item ->gambar_prd = null;
		

        $kategori =$this->kategori_m->get();
        

		$data = array(
			'page'=> 'add',
			'row'=> $item,
            'kategori'=>$kategori,
 
		);

		$this->template->load('admin/template','admin/product/form_item', $data);
	}
	public function proses(){
		$config['upload_path']          = './uploads/product/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 2048;
		$config['file_name']            = 'item ='.date('ymd').'='.substr(md5(rand()),0,10);
		$this->upload->initialize($config);
		$this->load->library('upload', $config);

		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			if ($this->item_m->check_barcode($post['kode'])->num_rows() > 0){
				echo "<script>alert('Data $post[kode] sudah digunakan');</script>";
				echo "<script>window.location='".site_url('item/add')."';</script>";
			}else{

				if(@$_FILES['gambar_prd']['name'] != null){
					if($this->upload->do_upload('gambar_prd')) {
						$post['gambar_prd']= $this->upload->data('file_name');
						$this->item_m->add($post);
						if($this->db->affected_rows() > 0){
							echo "<script>alert('data berhasil ditambahkan');</script>";
						}
						echo "<script>window.location='".site_url('item')."';</script>";
					}else{
						$error = $this->upload->display_errors();
						echo "<script>alert('Data gagal Upload');</script>";
						echo "<script>window.location='".site_url('item/add')."';</script>";
					}
					
				}
					
			}
			
		}else if(isset($_POST['edit'])){
			if ($this->item_m->check_barcode($post['kode'], $post['id'])->num_rows() > 0){
				echo "<script>alert('Barcode Sama');</script>";
				echo "<script>window.location='".site_url('item/edit/'.$post['id'])."';</script>";
			}else{
				if(@$_FILES['gambar']['name'] != null){
					if($this->upload->do_upload('gambar')) {
						$post['gambar']= $this->upload->data('file_name');
						$this->item_m->edit($post);
						if($this->db->affected_rows() > 0){
							//echo "<script>alert('data berhasil disimpan');</script>";
						}
						echo "<script>window.location='".site_url('item')."';</script>";
					}else{
						$error = $this->upload->display_errors();
						echo "<script>alert('Data gagal Upload');</script>";
						echo "<script>window.location='".site_url('item/edit')."';</script>";
					}
				}
			}
			
		}
			
	}

	public function edit($id){
		$query = $this->item_m->get($id);
		if($query->num_rows() > 0){
			$item = $query->row();
			$kategori =$this->kategori_m->get();


            $data = array(
                'page'=> 'edit',
                'row'=> $item,
                'kategori'=>$kategori,
            );
			$this->template->load('admin/template','admin/product/form_item', $data);
		}else{
			echo "<script>alert('Data Tidak Ditemukan');</script>";
			echo "<script>window.location='".site_url('item')."';</script>";
		}
	}
	
}
