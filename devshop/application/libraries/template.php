<?php
class Template
{

  protected $_ci;
  public function __construct()
  {
    $this->_ci = &get_instance();
  }
  function views($template = NULL, $data = NULL)
  {
    if ($template != NULL) {
      $data['head'] = $this->_ci->load->view('cus/head', $data, TRUE);
      //$data['topbar'] = $this->_ci->load->view('cus/topbar', $data, TRUE);
      $data['footer'] = $this->_ci->load->view('cus/footer', $data, TRUE);
      $data['content'] = $this->_ci->load->view('cus/content', $data, TRUE);
    }
  }
}
