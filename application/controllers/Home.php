<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('take_post');
	}
	public function index()
	{
		$data['atabled'] = $this->take_post->get_posting();

		$this->load->view('main/home', $data);
	}
	public function under_cons()
	{
		$this->load->view('under_construct');
	}
}
