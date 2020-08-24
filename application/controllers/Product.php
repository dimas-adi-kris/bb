<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('product_model');
  }
  function index()
  {
    $data['atabled'] = $this->product_model->get_product();
    $this->load->view('main/product_view', $data);
  }
  //   function add_new(){
  //     $this->load->view('add_product_view');
  //   }
  //   function save(){
  //     $product_name = $this->input->post('product_name');
  //     $product_price = $this->input->post('product_price');
  //     $this->product_model->save($product_name,$product_price);
  //     redirect('product');
  //   }
}
