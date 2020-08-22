<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Himahome extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('take_post');
	}
	public function index()
	{
		$data['atabled'] = $this->take_post->get_posting();
		$this->load->view('hima_home',$data);
	}

	public function admin()
	{
		$data['atabled'] = $this->take_post->get_posting();
		$this->load->view('admin',$data);
	}

	public function under_cons()
	{
		$this->load->view('under_construct');
	}

}
