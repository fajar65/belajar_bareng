<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKategori');
        $this->load->model('ModelKelas');
    }
    public function index()
    {
        $data['view'] = 'kelas';
        $data['title'] = 'Kelas';
        $data['kelas'] = $this->ModelKelas->joinKategoriKelas()->result();
        $data['kelasTerbaru'] = $this->ModelKelas->kelasTerbaru()->result();
		$data['kategori'] = $this->ModelKategori->getKategori()->result();
        $this->load->view('templates/main', $data);
    }

    public function resultSearch()
    {
        $data['view'] = 'cari_kelas';
        $data['title'] = 'Cari Kelas';
		$data['kategori'] = $this->ModelKategori->getKategori()->result();
        $data['cari'] = $this->ModelKelas->cariKelas();
        $this->load->view('templates/main', $data);
    }
}
