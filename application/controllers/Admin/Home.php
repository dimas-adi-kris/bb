<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "logged in") {
            redirect(base_url("auth/login"));
        }
        $this->load->model('take_post');
    }
    public function index()
    {
        $data['atabled'] = $this->take_post->get_posting();
        $this->load->view('admin/dashboard', $data);
    }

    public function add_post()
    {
        $this->load->view('admin/post');
    }

    public function save()
    {
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $this->take_post->save_post($judul, $isi);
        redirect('admin/home');
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->take_post->delete($id);
        redirect('admin/home');
    }

    function login_page()
    {
        $this->load->view('auth/login');
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth/login'));
    }
}
