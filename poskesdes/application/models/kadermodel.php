<?php 
 
class kadermodel extends CI_Model{
	function tampil_data(){
		return $this->db->get('pasien');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function ambil_pasien($num, $offset)
	{
		$this->db->order_by('id_pasien', 'ASC');
		$data = $this->db->get('pasien', $num, $offset);
		return $data->result();
	}
}

?>