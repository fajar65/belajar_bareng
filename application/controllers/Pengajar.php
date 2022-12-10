<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKategori');
        $this->load->model('ModelPengajar');
		$this->load->model('ModelKategori');
    }
    public function index()
    {
        $data['view'] = 'pengajar';
        $data['title'] = 'Pengajar';
        $data['pengajar'] = $this->ModelPengajar->pengajarTerbaru()->result();
		$data['kategori'] = $this->ModelKategori->getKategori()->result();
        $this->load->view('templates/main', $data);
    }
}
