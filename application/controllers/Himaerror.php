<?php
defined('BASEPATH') or exit('No direct script access allowed');

class himaerror extends CI_Controller
{
	public function index()
	{
		$this->load->view("hima_error/404");
	}
}
