<?php

/*
	Author @Fajar 2022
*/

defined('BASEPATH') or exit('No direct script access allowed');

class SuperModel extends CI_Model
{

    public function getData($table)
    {
        return $this->db->order_by('id', 'DESC')->get($table);
    }

    public function getWhere($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function getJoin($table1, $table2)
    {
        $this->db->from($table1);
        $this->db->join($table2, $table2 . '.id = ' . $table1 . '.id_' . $table2);
        $this->db->order_by($table1 . '.id', 'DESC');
        return $this->db->get();
    }

    public function update($table, $data, $where)
    {
        return $this->db->update($table, $data, $where);
    }

    public function delete($table, $where)
    {
        return $this->db->delete($table, $where);
    }
}
