<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modellogin extends CI_Model {
	function proseslogin($username_user, $password_user){
		$this->db->where('username_user',$username_user);
		$this->db->where('password_user',$password_user);
		return $this->db->get('user')->row();
	}
}