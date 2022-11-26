<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
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
        $data['view'] = ('admin/kelas');
        $data['title'] = 'Kelas';
        // $data['profil'] = $this->SuperModel->getData('profil')->row_array();
        $this->db->select('gambar, nama_kelas, harga_kelas, kelas.deskripsi AS deskripsi, kategori.nama_kategori');
        $this->db->from('kelas');
        $this->db->join('kategori', 'kategori.id_kategori = kelas.id_kategori');
        $this->db->order_by('kelas.id_kelas', 'DESC');
        $data['kelas'] = $this->db->get()->result();
        $this->load->view('admin/templates/main', $data);
    }
}
