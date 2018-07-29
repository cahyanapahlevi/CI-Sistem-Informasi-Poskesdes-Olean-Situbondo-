<?php
defined('BASEPATH') or exit('No direct script access allowed');
class login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('landing/landing.php');
	}
	function ceklogin(){
		if(isset($_POST['login'])){
			$username_user = $this->input->post('username_user',true);
			$password_user = $this->input->post('password_user',true);
			$cek = $this->modellogin->proseslogin($username_user, $password_user);
			$hasil = count($cek);
			if($hasil > 0){
				$yglogin = $this->db->get_where('user',array('username_user'=>$username_user, 'password_user' => $password_user))->row();
				$data = array('username_user' => $yglogin->username_user);
				$this->session->set_userdata($data);
				if($yglogin->id_level_user == '0'){
					redirect('kader');
				}elseif($yglogin->id_level_user == '1'){
					redirect('bidan');
			}else{
				redirect('login/index');
			}
		}
	}
}
}
?>