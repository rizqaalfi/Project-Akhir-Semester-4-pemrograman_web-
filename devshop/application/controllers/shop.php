<?php

class Shop extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    //meload library template yang telah di buat
    $this->load->library('template_shop');
    $this->load->model('shop_model');
  }

  public function blouse()
  {
    $where = array('kategori_prd' => 1);
    $data['produk'] = $this->shop_model->getprod($where, 'tbl_produk')->result();
    $this->template_shop->views('cust/shop/prod', $data);
  }

  public function kemeja()
  {
    $where = array('kategori_prd' => 2);
    $data['produk'] = $this->shop_model->getprod($where, 'tbl_produk')->result();
    $this->template_shop->views('cust/shop/prod', $data);
  }

  public function jaket()
  {
    $where = array('kategori_prd' => 3);
    $data['produk'] = $this->shop_model->getprod($where, 'tbl_produk')->result();
    $this->template_shop->views('cust/shop/prod', $data);
  }

  public function dress()
  {
    $where = array('kategori_prd' => 4);
    $data['produk'] = $this->shop_model->getprod($where, 'tbl_produk')->result();
    $this->template_shop->views('cust/shop/prod', $data);
  }
}
