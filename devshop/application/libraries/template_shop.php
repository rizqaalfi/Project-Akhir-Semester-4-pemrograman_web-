<?php
class Template_shop
{
  protected $_ci;
  function __construct()
  {
    $this->_ci = &get_instance();
  }
  function views($tmp1 = NULL, $data = NULL)
  {
    if ($tmp1 != NULL) {

      $data['head'] = $this->_ci->load->view('cust/layout/head', $data, TRUE);

      $data['topbar'] = $this->_ci->load->view('cust/shop/topbar', $data, TRUE);

      $data['isi1'] = $this->_ci->load->view($tmp1, $data, TRUE);

      $data['footer'] = $this->_ci->load->view('cust/layout/footer', $data, TRUE);

      $data['script'] = $this->_ci->load->view('cust/layout/script', $data, TRUE);

      echo $data['Template'] = $this->_ci->load->view('cust/Template_shop', $data, TRUE);
    }
  }
}
