<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('SuperModel');
        $this->load->model('ModelPengajar');
        $this->load->model('ModelKelas');
        if ($this->session->userdata('login') != 1) {
            $this->session->set_flashdata('error', 'Anda Harus Login Terlebih Dahulu!');
            redirect(site_url('admin/login'));
        }
    }

    public function index()
    {
        $data['view'] = ('admin/pengajar');
        $data['title'] = 'Pengajar Kelas';
        $data['pengajar'] = $this->ModelPengajar->pengajarTerbaru()->result();
        $this->load->view('admin/templates/main', $data);
    }

    // tampilan form tambah dan edit
    public function add()
    {
        $data['view'] = 'admin/pengajar_form';
        $data['title'] = 'Input Pengajar';
        $data['kelas'] = $this->ModelKelas->joinKategoriKelas()->result();
        $this->load->view('admin/templates/main', $data);
    }

    // upload data pengajar
    public function insert()
    {

        $this->form_validation->set_rules('nama_pengajar', 'nama_pengajar', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('id_kelas', 'id_kelas');
        // $this->form_validation->set_rules('isi', 'Isi', 'required');
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules('image', 'image', 'required');
        }

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(site_url('admin/pengajar'));
        } else {

            $foto = $_FILES['image']['name'];
            $ambext = explode(".", $foto);
            $ekstensi = end($ambext);
            $nama_pengajar_baru = date('YmdHis');
            $nama_pengajar_file = $nama_pengajar_baru . "." . $ekstensi;
            $config['upload_path'] = './assets/admin/uploads/pengajar/';
            $config['max_size']    =    2000;

            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['file_name'] = $nama_pengajar_file;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', 'image gagal diupload! ' . $this->upload->display_errors());
                redirect(site_url('admin/pengajar/add'));
            } else {

                $data = array(
                    // 'id_pengajar' => 4,
                    'image' => $nama_pengajar_file,
                    'nama_pengajar' => htmlentities($this->input->post('nama_pengajar')),
                    'id_kelas' => htmlentities($this->input->post('id_kelas')),
                    'deskripsi' => htmlentities($this->input->post('deskripsi'))
                    // 'isi' => htmlentities($this->input->post('isi'))

                );

                $this->db->insert('pengajar', $data);
                $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
                redirect('admin/pengajar');
            }
        }
    }

    // edit
    public function edit($id)
    {
        $where = array('id_pengajar' => $id);
        $data['kelas'] = $this->ModelKelas->joinKategoriKelas()->result();
        $data['pengajar'] = $this->SuperModel->edit_data($where, 'pengajar')->result();
        $data['pengajar2'] = $this->ModelPengajar->pengajarTerbaru()->result();
        $data['title'] = 'Edit Pengajar';
        $data['view'] = 'admin/pengajar_form';

        $this->load->view('admin/templates/main', $data);
    }

    // update
    public function update()
    {
        $this->form_validation->set_rules('id_pengajar', 'Id Pengajar', 'required');
        $this->form_validation->set_rules('nama_pengajar', 'Nama Pengajar', 'required');
        $this->form_validation->set_rules('id_kelas', 'Id Kelas', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        // $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(site_url('admin/pengajar/edit/' . $this->input->post('id_pengajar')));
        } else {

            $foto = $_FILES['image']['name'];

            if (empty($foto)) {
                $where = array('id_pengajar' => htmlentities($this->input->post('id_pengajar')));
                $data = array(
                    'nama_pengajar' => htmlentities($this->input->post('nama_pengajar')),
                    'id_kelas' => htmlentities($this->input->post('id_kelas')),
                    'deskripsi' => htmlentities($this->input->post('deskripsi'))
                    // 'isi' => htmlentities($this->input->post('isi'))
                    // 'mdate' => date('Y-m-d h:i:s')
                );

                $this->SuperModel->update_data('pengajar', $data, $where);
                $this->session->set_flashdata('success', 'Data berhasil di edit');
                redirect('admin/pengajar');
            } else {

                $ambext = explode(".", $foto);
                $ekstensi = end($ambext);
                $nama_pengajar_baru = date('YmdHis');
                $nama_pengajar_file = $nama_pengajar_baru . "." . $ekstensi;
                $config['upload_path'] = './assets/admin/uploads/pengajar/';
                $config['max_size']    =    2000;

                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['file_name'] = $nama_pengajar_file;
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('image')) {
                    $this->session->set_flashdata('error', 'image gagal diupload');
                    redirect(site_url('admin/pengajar_form/add'));
                } else {

                    $pengajar = $this->SuperModel->getWhere('pengajar', array('id_pengajar' => htmlentities($this->input->post('id_pengajar'))))->row_array();
                    unlink("./assets/admin/uploads/pengajar/" . $pengajar['image']);

                    $where = array('id_pengajar' => htmlentities($this->input->post('id_pengajar')));
                    $data = array(
                        'nama_pengajar' => htmlentities($this->input->post('nama_pengajar')),
                        'id_kelas' => htmlentities($this->input->post('id_kelas')),
                        'deskripsi' => htmlentities($this->input->post('deskripsi')),
                        // 'isi' => htmlentities($this->input->post('isi')),
                        'image' => $nama_pengajar_file
                        // 'mdate' => date('Y-m-d h:i:s'),
                    );

                    $this->SuperModel->update_data('pengajar', $data, $where);
                    $this->session->set_flashdata('success', 'Data berhasil di edit');
                    redirect('admin/pengajar');
                }
            }
        }
    }

    // hapus
    public function hapus()
    {
        $pengajar = $this->SuperModel->getWhere('pengajar', array('id_pengajar' => $this->uri->segment(4)))->row_array();
        unlink("./assets/admin/uploads/pengajar/" . $pengajar['image']);
        $delete = $this->SuperModel->delete('pengajar', array('id_pengajar' => $this->uri->segment(4)));

        if ($delete) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
            redirect(site_url('admin/pengajar'));
        } else {
            $this->session->set_flashdata('error', 'Data gagal dihapus');
            redirect(site_url('admin/pengajar_form'));
        }
    }
}
