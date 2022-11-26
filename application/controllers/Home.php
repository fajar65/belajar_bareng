<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('SuperModel');
	}

	public function index()
	{
		$data['view'] = 'home';
		$data['title'] =  'Belajar Bareng';
		$this->db->select('gambar, nama_kelas, harga_kelas, kelas.deskripsi AS deskripsi, kategori.nama_kategori');
        $this->db->from('kelas');
        $this->db->join('kategori', 'kategori.id_kategori = kelas.id_kategori');
        $this->db->order_by('kelas.id_kelas', 'DESC');
        $data['kelas'] = $this->db->get()->result();
		$this->load->view('templates/main', $data);
	}
}
