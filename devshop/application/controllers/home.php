<?php

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //meload library template yang telah di buat
    $this->load->library('template_cus');
    $this->load->model('shop_model');
  }


  function index()
  {
    $data['produk'] = $this->shop_model->getAllProduct()->result();
    //medeklarasikan data dalam mahasiswa model ke dalam array data
    $this->template_cus->views('cust/content/product', $data);
  }
  function detailProduk($id)
  {
    $where = array('id_prd' => $id);
    $data['produk'] = $this->shop_model->getProductDetails($where, 'tbl_produk')->result();
    $this->template_cus->views('cust/content/product-details', $data);
  }

  function Kategori($id)
  {
    $where = array('id_kategori' => $id);
    $data['produk'] = $this->shop_model->getProductDetails($where, 'tbl_kategori')->result();
    $this->template_cus->views('cust/content/product', $data);
  }

  function addCart()
  {

    $redirect_page = $this->input->post('redirect_page');

    $data = array(
      'id'      => $this->input->post('id'),
      'qty'     => $this->input->post('qty'),
      'price'   => $this->input->post('price'),
      'name'    => $this->input->post('name')

    );

    $this->cart->insert($data);
    redirect($redirect_page, 'refresh');
  }
}
