<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('SuperModel');
        $this->load->model('Modelkategori');
        $this->load->model('ModelKelas');
        $this->load->model('ModelKategori');
        if ($this->session->userdata('login') != 1) {
            $this->session->set_flashdata('error', 'Anda Harus Login Terlebih Dahulu!');
            redirect(site_url('admin/login'));
        }
    }

    public function index()
    {
        $data['view'] = ('admin/kategori');
        $data['title'] = 'Kategori Kelas';
        $this->db->select('id_kategori, nama_kategori, deskripsi');
        $this->db->from('kategori');
        $this->db->order_by('kategori.id_kategori', 'DESC');
        $data['kategori'] = $this->db->get()->result();
        $this->load->view('admin/templates/main', $data);
    }

    // tampilan form tambah dan edit
    public function add()
    {
        $data['view'] = 'admin/kategori_form';
        $data['title'] = 'Input Kategori';
        $data['kategori'] = $this->ModelKategori->getKategori()->result();
        $this->load->view('admin/templates/main', $data);
    }

    // upload data kategori
    public function insert()
    {
        $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(site_url('admin/kategori'));
        } else {

            $data = array(
                'nama_kategori' => htmlentities($this->input->post('nama_kategori')),
                'deskripsi' => htmlentities($this->input->post('deskripsi'))

            );
            $this->db->insert('kategori', $data);
            $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
            redirect('admin/kategori');
        }
    }

    // hapus
    public function hapus()
    {
        $kategori = $this->SuperModel->getWhere('kategori', array('id_kategori' => $this->uri->segment(4)))->row_array();
        unlink("./assets/admin/uploads/kategori/" . $kategori['image']);
        $delete = $this->SuperModel->delete('kategori', array('id_kategori' => $this->uri->segment(4)));

        if ($delete) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
            redirect(site_url('admin/kategori'));
        } else {
            $this->session->set_flashdata('error', 'Data gagal dihapus');
            redirect(site_url('admin/kategori_form'));
        }
    }
}
