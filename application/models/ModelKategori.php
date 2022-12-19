<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKategori extends CI_Model{
    public function getKategori()
    {
        return $this->db->get('kategori');
    }
    
     // tampil kategori kelas id
	public function getKategoriKelas($id_kategori){
        $this->db->select('id_kelas, gambar, nama_kelas, harga_kelas, kelas.deskripsi AS deskripsi, kategori.nama_kategori');
        $this->db->from('kelas');
        $this->db->join('kategori', 'kategori.id_kategori = kelas.id_kategori');
        $this->db->where('kategori.id_kategori', $id_kategori);
        $this->db->order_by('kategori.id_kategori', 'DESC');
        $query = $this->db->get();
        return $query;
	}

    public function kategoriTerbaru()
    {
        $this->db->select('kategori.id_kategori, nama_kategori, kategori.deskripsi AS deskripsi');
        $this->db->from('kategori');
        // $this->db->join('kelas', 'kelas.id_kelas = kategori.id_kelas');
        $query = $this->db->get();
        return $query;
    }
}
