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
	
	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('atabled');
	}

	function login($table,$where){
		return $this->db->get_where($table,$where);
	}

	function upd_data($id, $judul,$isi){
    $data = array(
      'judul' => $judul,
      'isi' => $isi
    );
    $this->db->replace('atabled',$data);
	}
}
