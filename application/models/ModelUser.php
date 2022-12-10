<?php

class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('users', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('users', $where);
    }
    public function getUserWhere($where = null)
    {
        return $this->db->get_where('users', $where);
    }
    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->limit(10, 0);
        return $this->db->get();
    }

    public function query_validasi_email($email){
    	$result = $this->db->query("SELECT * FROM users WHERE email='$email' LIMIT 1");
        return $result;
    }

    public function query_validasi_password($email,$password){
    	$result = $this->db->query("SELECT * FROM users WHERE email='$email' AND password=SHA2('$password', 224) LIMIT 1");
        return $result;
    }
}
