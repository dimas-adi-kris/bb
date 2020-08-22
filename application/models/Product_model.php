<?php
class Product_model extends CI_Model{
 
  function get_product(){
    $result = $this->db->get('atabled');
    return $result;
  }
  function save($judul,$isi){
    $data = array(
      'judul' => $judul,
      'isi' => $isi
    );
    $this->db->insert('atabled',$data);
  }
}
