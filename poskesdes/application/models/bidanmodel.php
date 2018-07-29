<?php 
 
class bidanmodel extends CI_Model{
	function tampil_data(){
		return $this->db->get('pasien');
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
	function ambil_pasien($num, $offset)
	{
		$this->db->order_by('id_pasien', 'ASC');
		$data = $this->db->get('pasien', $num, $offset);
		return $data->result();
	}
	function dapat($id_pasien){
		$query = $this->db->query("SELECT * FROM pasien where id_pasien='$id_pasien' LIMIT 1");
       return $query->result_array();

	}
}
?>