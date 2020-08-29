<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dinas extends CI_Controller
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

        $data['jabatan'] = $this->take_post->show_item('tb_jabatan')->result();

        $this->load->view('admin/jabatan', $data);
    }

    public function getUpdate()
    {
        $id = $this->input->post('id');
        $where = array('id' => $id);
        $data = $this->take_post->getId($where, 'tb_jabatan')->result();
        echo json_encode($data);
    }

    public function addItems()
    {
        $temp = $this->input->post();
        $data = $this->addJabatan($temp);
        $this->take_post->add_items($data, 'tb_jabatan');
        redirect('admin/dinas');
    }

    private function addJabatan($temp)
    {
        $data = array(
            'jabatan' => $this->input->post('jabatan'),
        );
        return $data;
    }

    public function delete($id)
    {
        $where = array('id' => $id);

        $this->take_post->deleteitem($where, 'tb_jabatan');
        redirect('admin/dinas');
    }

    public function Update($direct)
    {
        $target = array(
            'id' => $this->input->post('id')
        );
        $temp = $this->input->post();
        $data = $this->addJabatan($temp);
        $this->take_post->updateData($target, $data, 'tb_jabatan');
        redirect('admin/dinas');
    }
}
