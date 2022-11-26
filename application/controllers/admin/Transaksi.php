<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('SuperModel');
        if ($this->session->userdata('login') != 1) {
            $this->session->set_flashdata('error', 'Anda Harus Login Terlebih Dahulu!');
            redirect(site_url('admin/login'));
        }
    }
    
    public function index()
    {
        $data['view'] = ('admin/transaksi');
        $data['title'] = 'Transaksi Pembelian Kelas';
        $this->load->view('admin/templates/main', $data);
    }
}
