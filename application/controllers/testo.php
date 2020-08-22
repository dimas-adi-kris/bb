<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testo extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('take_post');
	}
	public function index()
	{
		$data['atabled'] = $this->take_post->get_posting();
		$this->load->view('welcome_message',$data);
	}
}
