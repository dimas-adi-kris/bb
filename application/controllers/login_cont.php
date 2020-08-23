<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_cont extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('take_post');
	}
	public function index()
	{
		$this->load->view('login');
	}

	function login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$where = array(
			'username' => $user,
			'password' => md5($pass)
		);
		$cek = $this->take_post->login("adminhima",$where)->num_rows();
		if($cek > 0)
		{
			$data_session = array(
				'nama' => $user,
				'status' => "logged in"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));
		}else{
			$data_session = array(
				'status' => "wrong password");
			$this->session->set_userdata($data_session);
		}
	}
}
