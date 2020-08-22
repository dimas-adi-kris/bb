<?php
class Take_post extends CI_Model{
 
  function get_posting(){
    $result = $this->db->get('atabled');
    return $result;
	}
	
  function save_post($judul,$isi){
    $data = array(
      'judul' => $judul,
      'isi' => $isi
    );
    $this->db->insert('atabled',$data);
  }
}
