<?php

defined('BASEPATH') OR exit('No direct script access allowed');

error_reporting(0);

class Auth extends CI_Controller {

	// function __construct() {
	// 	parent::__construct();
	// 	$this->load->model('Auth_model');
	// }

	public function index() {
        $this->load->view('404');
    }

    public function login() {
        $this->load->view('login');     
        // $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|valid_email');
        // $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');

        // if(!$this->form_validation->run()) {
        //     $this->load->view('dashboard/auth/login');
        // } else {
        //     $email = htmlspecialchars(htmlentities(stripslashes($this->input->post('email', true))));
        //     $password = htmlspecialchars(htmlentities(stripslashes($this->input->post('password', true))));

        //     $user = $this->db->get_where('users', ['email' => $email])->row();

        //     if(!$user) {
        //         $this->session->set_flashdata('error', 'Email is not registered!');
        //         redirect(site_url('auth/login'));
        //     } else {
        //         if(!password_verify($password, $user->password)) {
        //             $this->session->set_flashdata('error', 'Wrong password!');
        //         } else {
        //             // Set form value
        //             $this->session->set_flashdata('email', $email);
        //             $this->session->set_flashdata('password', $password);
                    
        //             //SESSION 
        //             $data = ['id' => $user->id, 'role_id' => $user->role_id];
        //             $this->session->set_userdata($data);
        //             $this->session->has_userdata($user->id);
        //             $this->session->set_flashdata('success', 'Login success!');
        //         }
        //         redirect(site_url('auth/login'));
        //         $res = ['token' => $this->security->get_csrf_hash()];
        //         echo json_encode($res);
        //     }
        // }
    }

    public function daftar(){
        $this->load->view('daftar');
    }

    public function logout() {
        $this->Auth_model->logout();
        $this->session->set_flashdata('logout', 'Logout success!');
        redirect(site_url('auth/login'));
    }

}
