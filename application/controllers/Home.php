<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelUser');
		$this->load->model('ModelKategori');
		$this->load->model('ModelKelas');
	}

	public function index()
	{
		$data['view'] = 'home';
		$data['title'] =  'Belajar Bareng';
		$data['kelasPopuler'] = $this->ModelKelas->kelasPopuler()->result();
		$data['kategori'] = $this->ModelKategori->getKategori()->result();
		$this->load->view('templates/main', $data);
	}
}
