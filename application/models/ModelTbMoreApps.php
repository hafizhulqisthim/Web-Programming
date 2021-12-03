<?php 
Class ModelTbMoreapps extends CI_Model
{
    //manajemen aplikasi
    public function get_aplikasi()
    {
        return $this->db->get('aplikasi')->result_array();
    }
    public function aplikasiWhere($where)
    {
        return $this->db->get_where('aplikasi', $where);
    }

    public function simpanAplikasi($data = null)
    {
        $this->db->insert('aplikasi',$data);
    }

    public function updateAplikasi($data = null, $where = null)
    {
        $this->db->update('aplikasi', $data, $where);
    }

    public function hapusAplikasi($where = null)
    {
        $this->db->delete('aplikasi', $where);
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if(!empty($where) && count($where) > 0){
            $this->db->where($where);
        }
        $this->db->from('aplikasi');
        return $this->db->get()->row($field);
    }
    
    //manajemen kategori
    public function getKategori()
    {
        return $this->db->get('kategori');
    }

    public function kategoriWhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }

    public function simpanKategori($data = null)
    {
        $this->db->insert('kategori', $data);
    }

    public function hapusKategori($where = null)
    {
        $this->db->delete('kategori', $where);
    }

    public function updateKategori($where = null, $data = null)
    {
        $this->db->update('kategori', $data, $where);
    }

    //join
    public function joinKategoriAplikasi($where)
    {
        $this->db->select('aplikasi.id_kategori,kategori.kategori');
        $this->db->from('aplikasi');
        $this->db->join('kategori','kategori.id = aplikasi.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }


    //manajemen tb_moreapps
    public function get_tb_moreapps()
    {
        return $this->db->get('tb_moreapps')->result_array();
    }
    public function tb_moreappsWhere($where)
    {
        return $this->db->get_where('tb_moreapps', $where);
    }

    public function simpantb_moreapps($data = null)
    {
        $this->db->insert('tb_moreapps',$data);
    }

    public function updatetb_moreapps($data = null, $where = null)
    {
        $this->db->update('tb_moreapps', $data, $where);
    }

    public function hapustb_moreapps($where = null)
    {
        $this->db->delete('tb_moreapps', $where);
    }

    public function totaltb_moreapps($field, $where)
    {
        $this->db->select_sum($field);
        if(!empty($where) && count($where) > 0){
            $this->db->where($where);
        }
        $this->db->from('tb_moreapps');
        return $this->db->get()->row($field);
    }


    public function getSearch()
    {
        $filter = $this->input->get('find');
        $this->db->like('name',$filter);
        $this->db->or_like('name', $filter);
        $this->db->or_like('info', $filter);
        $this->db->or_like('link', $filter);
        $this->db->or_like('download', $filter);
        $query=$this->db->get("tb_moreapps");  
        return $query->result_array();  
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tb_moreapps');
        $this->db->like('id', $keyword);
        $this->db->or_like('name', $keyword);
        $this->db->or_like('info', $keyword);
        $this->db->or_like('link', $keyword);
        $this->db->or_like('download', $keyword);

        return $this->db->get()->result();

        
    }
}
