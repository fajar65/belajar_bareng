<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajar extends CI_Controller
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
        $data['view'] = ('admin/pengajar');
        $data['title'] = 'Pengajar Kelas';
        $this->db->select('nama_pengajar, image, pengajar.deskripsi AS deskripsi, kelas.nama_kelas');
        $this->db->from('pengajar');
        $this->db->join('kelas', 'kelas.id_kelas = pengajar.id_kelas');
        $data['pengajar'] = $this->db->get()->result();
        $this->load->view('admin/templates/main', $data);
    }
}
