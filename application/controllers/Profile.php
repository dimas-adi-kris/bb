<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function index()
    {
        $this->load->view('konten/logo-kabinet');
    }

    public function struktur()
    {
        $this->load->view('konten/struktural');
    }
    public function contact()
    {
        $this->load->view('konten/kontak');
    }
    public function news()
    {
        $this->load->view('konten/news');
    }
}
