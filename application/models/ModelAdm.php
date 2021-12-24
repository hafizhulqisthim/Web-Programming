<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAdm extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('administrator', $data);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('administrator', $where);
    }

    public function getUserWhere($where = null)
    {
        return $this->db->get_where('administrator', $where);
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
        $this->db->from('administrator');
        $this->db->limit(10, 0);
        return $this->db->get();
    }

    public function total_anggota($field, $where)
    {
        $this->db->select_sum($field);
        if(!empty($where) && count($where) > 0){
            $this->db->where($where);
        }
        $this->db->from('administrator');
        return $this->db->get()->row($field);
    }

}