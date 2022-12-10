<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKategori');
        $this->load->model('ModelKelas');
    }
    
    public function index()
    {
        $this->load->view('404');
    }

    public function resultSearch()
    {
        $data['view'] = 'cari_kelas';
        $data['title'] = 'Cari Kelas';
        $data['cari'] = $this->ModelKelas->cariKelas();
        $this->load->view('templates/main', $data);
    }

    // kategori kelas
	public function kategoriKelas($id_kategori){
		$where = array ('id_kategori' => $id_kategori);
        $data['title'] = 'Detail Kategori';
        $data['kelas'] = $this->ModelKelas->joinKategoriKelas()->result();
		$data['kategoriKelas'] = $this->ModelKategori->getKategoriKelas($id_kategori)->result();
		$data['kategoriKelas2'] = $this->ModelKelas->tampil_data($where,'kategori')->result();
		$data['kategori'] = $this->ModelKategori->getKategori()->result();
		$data['view'] = 'kategori';
		$this->load->view('templates/main',$data);	
	}
}
