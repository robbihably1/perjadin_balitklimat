<?php
class Model_role extends CI_model
{
	function tampil_data($table){
		return $this->db->get($table);
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}
