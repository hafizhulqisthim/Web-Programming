<?php 

class ModelFeedback extends CI_Model
{
	
	public function get_feedback()
	{
		return $this->db->get('feedback')->result_array();
	}

	public function add_feedback($data)
	{
		$this->db->insert('feedback',$data);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table,$where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
		
	}

	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}


	public function getSearch()
    {
        $filter = $this->input->get('find');
        $this->db->like('name',$filter);
        $this->db->or_like('name', $filter);
        $this->db->or_like('email', $filter);
        $this->db->or_like('comment', $filter);
        $query=$this->db->get("feedback");  
        return $query->result_array();  
    }
}
?>