<?php

defined('BASEPATH') or exit('No direct script access allowed');

error_reporting(0);

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUser');
        $this->load->model('SuperModel');
    }

    public function index()
    {
        // $this->load->view('login');
        if ($this->session->userdata('logged') != TRUE) {
            $this->load->view('login');
        } else {
            $url = base_url('home');
            redirect($url);
        };
    }

    // public function login()
    // {
    //     $email = $this->input->post('email');
    //     $password = $this->input->post('password');

    //     $validasi_email = $this->ModelUser->query_validasi_email($email);
    //     if ($validasi_email->num_rows() > 0) {
    //         $validate_ps = $this->ModelUser->query_validasi_password($email, $password);
    //         if ($validate_ps->num_rows() > 0) {
    //             $x = $validate_ps->row_array();
    //             if ($x['is_active'] == '1') {
    //                 $this->session->set_userdata('logged', TRUE);
    //                 $this->session->set_userdata('user', $email);
    //                 $id = $x['id_user'];
    //                 if ($x['role_id'] == '1') { //Administrator
    //                     $name = $x['email'];
    //                     $this->session->set_userdata('access', 'Administrator');
    //                     $this->session->set_userdata('id', $id);
    //                     $this->session->set_userdata('name', $name);
    //                     redirect('home');
    //                 } else if ($x['role_id'] == '2') { //User
    //                     $name = $x['email'];
    //                     $this->session->set_userdata('access', 'User');
    //                     $this->session->set_userdata('id', $id);
    //                     $this->session->set_userdata('name', $name);
    //                     redirect('home');
    //                 } else if ($x['role_id'] == '3') { //Mahasiswa
    //                     $name = $x['email'];
    //                     $this->session->set_userdata('access', 'Mahasiswa');
    //                     $this->session->set_userdata('id', $id);
    //                     $this->session->set_userdata('name', $name);
    //                     redirect('home');
    //                 }
    //                 else if ($x['role_id'] == '0') {
    //                     $name = $x['email'];
    //                     $this->session->set_userdata('access', 'done'); 
    //                     $this->load->view('home');
    //                 }
    //             } else {
    //                 $url = base_url('login');
    //                 echo $this->session->set_flashdata('msg', '<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
    //                 <h3>Uupps!</h3>
    //                 <p>Akun kamu telah di blokir. Silahkan hubungi admin.</p>');
    //                 redirect($url);
    //             }
    //         } else {
    //             $url = base_url('login');
    //             echo $this->session->set_flashdata('msg', '<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
    //                 <h3>Uupps!</h3>
    //                 <p>Password yang kamu masukan salah.</p>');
    //             redirect($url);
    //         }
    //     } else {
    //         $url = base_url('login');
    //         echo $this->session->set_flashdata('msg', '<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
    //         <h3>Uupps!</h3>
    //         <p>Email yang kamu masukan salah.</p>');
    //         redirect($url);
    //     }
    // }

    public function ceklogin()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $cekData = array(
            'email' => htmlspecialchars(htmlentities(stripslashes($this->input->post('email')))),
            'password' => htmlspecialchars(htmlentities(stripcslashes(md5($this->input->post('password'))))),
        );

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(site_url('auth'));
        } else {

            $cekLogin = $this->SuperModel->getWhere('users', $cekData);
            if ($cekLogin->num_rows() > 0) {

                $session = array(
                    'login' => 2,
                    'id_user' => $cekLogin->row_array()['id_user'],
                    'email' => $cekLogin->row_array()['email'],
                    'username' => $cekLogin->row_array()['username'],
                    'level' => $cekLogin->row_array()['level'],
                );
                $this->session->set_userdata($session);
                redirect(site_url('home'));
            } else {
                $this->session->set_flashdata('error', 'email atau password salah');
                redirect(site_url('auth'));
            }
        }
    }

    public function daftar()
    {
        $this->load->view('daftar');
    }

    // upload data sensor
	public function register()
	{
		// $this->form_validation->set_rules('nama_user', 'Nama User', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('error', validation_errors());
			redirect(site_url('auth/register'));
		}else{

			$data = array(
				// 'nama_user' => htmlentities($this->input->post('nama_user')),
				'email' => htmlentities($this->input->post('email')),
				'username' => htmlentities($this->input->post('username')),
				'password' => htmlentities(md5($this->input->post('password'))),
				'level' => '2'
				
			);
			$this->db->insert('users', $data);
				$this->session->set_flashdata('success', 'Register berhasil, silahkan login :)');
				redirect('auth');
		}
	}

    public function logout(){
		$this->session->set_userdata('username', FALSE);
        $this->session->sess_destroy();
		$this->session->set_flashdata('success', 'Anda telah logout');
        redirect(site_url('home'));
    }


    // public function logout()
    // {
    //     // $this->Auth_model->logout();
	// 	$this->session->set_userdata('email', FALSE);
    //     $this->session->set_flashdata('logout', 'Logout success!');
    //     redirect(site_url('auth'));
    // }
}
