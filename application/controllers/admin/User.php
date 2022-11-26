<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $data['view'] = ('admin/user');
        $data['title'] = 'User';
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('user.id_user', 'DESC');
        $data['user'] = $this->db->get()->result();
        $this->load->view('admin/templates/main', $data);
    }
}
