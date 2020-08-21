<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dinas_akademik extends CI_Controller {

	public function index()
	{
		$this->load->view('konten/dinas-akademik');
	}
}
