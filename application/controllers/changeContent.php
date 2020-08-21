<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Dashboard Page Loader

class changeContent extends CI_Controller {
    public function posta(){
        $this->load->view('konten/posta');
    }

    public function perkenalan(){
        $this->load->view('konten/perkenalan');
    }
}
?>
