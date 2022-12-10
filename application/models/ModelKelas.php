<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKelas extends CI_Model
{
    public function getKelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $query = $this->db->get();
        return $query;
    }

    public function joinKategoriKelas()
    {
        $this->db->select('id_kelas, gambar, nama_kelas, harga_kelas, kelas.deskripsi AS deskripsi, kategori.nama_kategori');
        $this->db->from('kelas');
        $this->db->join('kategori', 'kategori.id_kategori = kelas.id_kategori');
        $this->db->order_by('kelas.id_kelas', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function kelasPopuler()
    {
        $this->db->select('id_kelas, gambar, nama_kelas, harga_kelas, kelas.deskripsi AS deskripsi, kategori.nama_kategori');
        $this->db->from('kelas');
        $this->db->join('kategori', 'kategori.id_kategori = kelas.id_kategori');
        $this->db->limit(5);
        $this->db->order_by('kelas.id_kelas', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function kelasTerbaru()
    {
        $this->db->select('id_kelas','gambar, nama_kelas, harga_kelas, kelas.deskripsi AS deskripsi, kategori.nama_kategori');
        $this->db->from('kelas');
        $this->db->join('kategori', 'kategori.id_kategori = kelas.id_kategori');
        $this->db->limit(5);
        $this->db->order_by('kelas.id_kelas', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function cariKelas()
    {
        $cari = $this->input->GET('cari', TRUE);
        $data = $this->db->query("SELECT id_kelas, nama_kelas, harga_kelas, kelas.deskripsi AS deskripsi, kategori.nama_kategori FROM kelas INNER JOIN kategori ON kelas.id_kategori = kategori.id_kategori WHERE nama_kelas like '%$cari%' ");
        return $data->result();
    }

    // tampil
	public function tampil_data($where,$table){
		return $this->db->get_where($table,$where);
	}
}
