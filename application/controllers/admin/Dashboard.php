<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$data['view'] = 'admin/dashboard';
		$data['title'] = 'Dashboard';
		$data['count_harga'] = $this->count_harga_kelas();
		$data['count_users'] = $this->count_users();
		$this->load->view('admin/templates/main', $data);
	}

	public function count_harga_kelas(){
		$sql = "SELECT SUM(harga_kelas / 2) as harga FROM kelas";
		$result = $this->db->query($sql);
		return $result->row()->harga;
	}

	public function count_users(){
		$sql = "SELECT COUNT(id_user) as id_user FROM users";
		$result = $this->db->query($sql);
		return $result->row()->id_user;
	}
}
