<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('SuperModel');
        $this->load->model('ModelKelas');
        if ($this->session->userdata('login') != 1) {
            $this->session->set_flashdata('error', 'Anda Harus Login Terlebih Dahulu!');
            redirect(site_url('admin/login'));
        }
    }
    
    public function index()
    {
        $data['view'] = ('admin/kelas');
        $data['title'] = 'Kelas';
		$data['kelas'] = $this->ModelKelas->joinKategoriKelas()->result();
        $this->load->view('admin/templates/main', $data);
    }
}
