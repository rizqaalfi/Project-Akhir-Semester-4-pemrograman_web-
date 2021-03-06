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
    $user = $this->input->post('username');
    $id = $this->input->post('id_prd');
    $qty = $this->input->post('qty');
    $harga = $this->input->post('harga_prd');
    $nama = $this->input->post('nama_prd');
    $keranjang = $this->input->post('id_keranjang');
    $ukuran = $this->input->post('ukuran_prd');

    if ($user == null) {
      echo "<script>alert('Harap Login terlebih dahulu');</script>";
      redirect('auth');
    } else {

      if ($id == 'id_prd') {
        $data = array(
          'qty' => $qty += 1,
        );

        $where = array(
          'id' => $id
        );

        $this->shop_model->cartPlus($where, $data, 'tbl_keranjang');
        redirect('Home/cart/' . $user);
      } else {

        $data = array(
          'id_prd' => $id,
          'qty' => $qty,
          'harga_prd' => $harga,
          'nama_prd' => $nama,
          'username' => $user,
          'id_keranjang' => $keranjang,
          'ukuran_prd' => $ukuran

        );

        $this->shop_model->addCart($data, 'tbl_keranjang');
        redirect('Home/cart/' . $user);
      }
    }
  }

  function cart($username = null)
  {

    if ($username !== null) {
      $where = array('username' => $username);
      $data['produk'] = $this->shop_model->getCart($where, 'tbl_keranjang')->result();
      $this->template_cus->views('cust/content/cart', $data);
    } else {
      redirect('auth');
    }
  }

  function updateCart()
  {
  }

  public function delCart($id)
  {
    $getUser = $this->session->userdata('session_user');

    $where = array('id_keranjang' => $id);
    $this->shop_model->delCart($where, 'tbl_keranjang');
    redirect('Home/cart/' . $getUser);
  }

  public function contact()
  {
    $this->template_cus->views('cust/content/contact');
  }

  public function portofolio()
  {
    $this->template_cus->views('cust/content/portofolio');
  }
}
