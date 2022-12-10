<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('SuperModel');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Admin';
        $this->load->view('admin/login', $data);
        // $this->load->view('404');
    }

    public function ceklogin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $cekData = array(
            'username_admin' => htmlspecialchars(htmlentities(stripslashes($this->input->post('username')))),
            'password' => htmlspecialchars(htmlentities(stripcslashes(md5($this->input->post('password'))))),
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(site_url('admin/login'));
        } else {

            $cekLogin = $this->SuperModel->getWhere('admin', $cekData);
            if ($cekLogin->num_rows() > 0) {

                $session = array(
                    'login' => 1,
                    'id_admin' => $cekLogin->row_array()['id_admin'],
                    'username_admin' => $cekLogin->row_array()['username_admin'],
                    'level' => $cekLogin->row_array()['level'],
                );
                $this->session->set_userdata($session);
                redirect(site_url('admin/dashboard'));
            } else {
                $this->session->set_flashdata('error', 'Username atau password salah');
                redirect(site_url('admin/login'));
            }
        }
    }

    public function logout(){
		$this->session->set_userdata('username_admin', FALSE);
        $this->session->sess_destroy();
		$this->session->set_flashdata('success', 'Anda telah logout');
        redirect(site_url('admin/login'));
    }
}
