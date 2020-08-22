<?php
class Take_post extends CI_Model{
 
  function get_posting(){
    $result = $this->db->get('atabled');
    return $result;
	}
	
	function save_post(){
		
	}
}
