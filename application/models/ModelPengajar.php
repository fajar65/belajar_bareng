<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelPengajar extends CI_Model
{
    public function getPengajar()
    {
        $this->db->select('*');
        $this->db->from('pengajar');
        $query = $this->db->get();
        return $query;
    }

    public function pengajarTerbaru()
    {
        $this->db->select('pengajar.id_pengajar, nama_pengajar, image, pengajar.deskripsi AS deskripsi, kelas.nama_kelas, kelas.id_kelas');
        $this->db->from('pengajar');
        $this->db->join('kelas', 'kelas.id_kelas = pengajar.id_kelas');
        $query = $this->db->get();
        return $query;
    }

    public function caripengajar()
    {
        $cari = $this->input->GET('cari', TRUE);
        $data = $this->db->query("SELECT nama_pengajar, pengajar.deskripsi AS deskripsi, kategori.nama_kategori FROM pengajar INNER JOIN kategori ON pengajar.id_kategori = kategori.id_kategori WHERE nama_pengajar like '%$cari%' ");
        return $data->result();
    }

    // tampil
	public function tampil_data($where,$table){
		return $this->db->get_where($table,$where);
	}

    // input
	function insert($data,$table){
		$this->db->insert($table,$data);
	}
}
