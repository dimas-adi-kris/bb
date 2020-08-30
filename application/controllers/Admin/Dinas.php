<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dinas extends CI_Controller
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
        $data['dinas'] = $this->take_post->show_item('tb_dinas')->result();

        $this->load->view('admin/dinas', $data);
    }


    public function getUpdate()
    {
        $id = $this->input->post('id');
        $where = array('id' => $id);
        $data = $this->take_post->getId($where, 'tb_dinas')->result();
        echo json_encode($data);
    }

    public function addItems()
    {

        $temp = $this->input->post();
        $data = $this->addDinas($temp);
        $this->take_post->add_items($data, 'tb_dinas');
        redirect('admin/dinas');
    }

    private function addDinas($data)
    {
        $nama = $this->input->post('nama');
        $slug = $nama;
        $slug = $this->detect($slug);


        if (isset($_FILES)) {
            $config['allowed_types'] = 'jpeg|png|jpg';
            $config['upload_path'] = 'assets/Logo';
            $config['max_size']             = 5120;
            $config['encrypt_name']             = TRUE;
            $this->load->library('upload', $config);

            if (!empty($_FILES['Photo_1'])) {
                if ($this->upload->do_upload('Photo_1')) {
                    $Photo_1 = $this->upload->data('file_name');
                } else {
                    $Photo_1 = 'default.png';
                }
            }

            if (!empty($_FILES['Photo_2'])) {
                if ($this->upload->do_upload('Photo_2')) {
                    $Photo_2 = $this->upload->data('file_name');
                } else {
                    $Photo_2 = 'default.png';
                }
            }
        } else {
            echo ' tidak ada isi';
        }

        $data = array(
            'slug' => $slug,
            'nama' => $nama,
            'logo' => $Photo_1,
            'background' => $Photo_2,
        );

        return $data;
    }


    private function updateDinas()
    {
        $nama = $this->input->post('nama');
        $slug = $nama;
        $slug = $this->detect($slug);
        $id = $this->input->post('id');
        $old_image1 = $this->input->post('label_1');
        $old_image2 = $this->input->post('label_2');

        if (isset($_FILES)) {
            $config['allowed_types'] = 'jpeg|png|jpg';
            $config['upload_path'] = 'assets/Logo';
            $config['max_size'] = 5120;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);

            if (!empty($_FILES['Photo_1'])) {
                if ($this->upload->do_upload('Photo_1')) {
                    if ($old_image1 != 'default.png') {
                        unlink(FCPATH . 'assets/Logo' . $old_image1);
                    }
                    $Photo_1 = $this->upload->data('file_name');
                } else {
                    $Photo_1 = $old_image1;
                }
            }

            if (!empty($_FILES['Photo_2'])) {
                if ($this->upload->do_upload('Photo_2')) {
                    if ($old_image2 != 'default.png') {
                        unlink(FCPATH . 'assets/Logo' . $old_image2);
                    }
                    $Photo_2 = $this->upload->data('file_name');
                } else {
                    $Photo_2 = $old_image2;
                }
            }
        } else {
            echo ' tidak ada isi';
        }

        $data = array(
            'logo' => $Photo_1,
            'nama' => $nama,
            'slug' => $slug,
            'background' => $Photo_2,

        );

        $this->take_post->updateData(['id' => $id], $data, 'tb_dinas');
        redirect('admin/dinas');
    }


    public function Update()
    {
        $target = array(
            'id' => $this->input->post('id')
        );
        $temp = $this->input->post();
        $data = $this->updateDinas($temp);
        $this->take_post->updateData($target, $data, 'tb_dinas');
        redirect('admin/dinas');
    }

    public function delete($id)
    {
        $this->take_post->deleteitem(['id' => $id], 'tb_dinas');
        redirect('admin/dinas');
    }

    private function detect($data)
    {
        $detect = str_replace(" ", "-", strtolower($data));
        $detect = str_replace("'s", "", $detect);
        return $detect;
    }
}
