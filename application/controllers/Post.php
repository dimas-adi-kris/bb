<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('take_post');
  }
  function index(){
    $data['atabled'] = $this->product_model->get_posting();
    $this->load->view('konten/posta',$data);
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
