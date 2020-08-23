<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();

		if($this->session->userdata('status') != "logged in"){
			redirect(base_url("login_cont"));
		}
		$this->load->model('take_post');
	}
	public function index()
	{
		$data['atabled'] = $this->take_post->get_posting();
		$this->load->view('admin/1_dash',$data);
	}

	public function add_post()
	{
		$this->load->view('admin/2_post');
	}

	public function save()
	{
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$this->take_post->save_post($judul,$isi);
		redirect('admin');
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->take_post->delete($id);
		redirect('admin');
	}

	function login_page(){
		$this->load->view('login');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login_cont'));
	}
}
