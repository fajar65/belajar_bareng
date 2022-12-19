<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('SuperModel');
        $this->load->model('ModelKelas');
		$this->load->model('ModelKategori');
        if ($this->session->userdata('login') != 2) {
            $this->session->set_flashdata('error', 'Anda Harus Login Terlebih Dahulu!');
            redirect(site_url('auth'));
        }
    }
    public function index()
    {
        $data['view'] = 'payment';
        $data['title'] = 'Pembayaran Kelas';
        $data['payment'] = $this->db->get_where('kelas');
		$data['payment'] = $this->tampilKelas()->result();
		$data['kategori'] = $this->ModelKategori->getKategori()->result();
        $this->load->view('templates/main', $data);
    }

    // tampil data kelas
	private function tampilKelas(){
		return $this->db->get('kelas');
    }

    // detail_kelas kelas
	public function paymentKelas($id_kelas){
		$where = array ('id_kelas' => $id_kelas);
        $data['title'] = 'Bayar Kelas';
        $data['kelas'] = $this->ModelKelas->joinKategoriKelas()->result();
		$data['detailKelas'] = $this->ModelKelas->tampil_data($where,'kelas')->result();
		$data['kategori'] = $this->ModelKategori->getKategori()->result();
		$data['view'] = 'payment';
		$this->load->view('templates/main',$data);	
	}
}
