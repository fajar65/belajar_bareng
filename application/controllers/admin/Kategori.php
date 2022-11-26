<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
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
        $data['view'] = ('admin/kategori');
        $data['title'] = 'Kategori Kelas';
        $this->db->select('nama_kategori, deskripsi');
        $this->db->from('kategori');
        $this->db->order_by('kategori.id_kategori', 'DESC');
        $data['kategori'] = $this->db->get()->result();
        $this->load->view('admin/templates/main', $data);
    }
}
