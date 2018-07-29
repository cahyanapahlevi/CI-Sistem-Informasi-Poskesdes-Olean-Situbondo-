<?php 
 
class adminmodel_2 extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
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
	function ambil_user($num, $offset)
	{
		$this->db->order_by('id_user', 'ASC');
		$data = $this->db->get('user', $num, $offset);
		return $data->result();
	}
}
?>