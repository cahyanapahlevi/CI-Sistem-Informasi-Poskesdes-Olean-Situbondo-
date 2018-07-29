<?php 
	defined('BASEPATH') OR exit('no direct script access allowed'); 

	class modelloginadmin extends CI_Model{
		public function __construct(){
			parent::__construct(); 
		}

		public function cek_login($username_admin, $password_admin){
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where('username_admin', $username_admin);
			$this->db->where('password_admin', $password_admin);

			return $this->db->get()->num_rows();     
		}
	}