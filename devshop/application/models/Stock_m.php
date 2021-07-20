<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_m extends CI_Model {

    public function add_stock_in($post){
        $params = [
            'id_item'=> $post['id_item'],
            'type'=> 'in',
            'detail'=> $post['detail'],
            'id'=> $post['supplier'] == '' ? null : $post['supplier'],
            'qty'=> $post['qty'],
            'date'=> $post['date'],
        ];
        $this->db->insert('tbl_stock', $params);
    }


    
}