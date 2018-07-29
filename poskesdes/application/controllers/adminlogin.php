<?php 
	class adminlogin extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('modelloginadmin'); 
		}

		public function index(){
			$this->load->view('landing/admin.php'); 
		}

		public function proses(){
			$username_admin = $this->input->post('username_admin'); 
			$password_admin = $this->input->post('password_admin');
			$cek = $this->modelloginadmin->cek_login($username_admin, $password_admin);
			$hasil = count($cek);
			if($hasil > 0){
				$yglogin = $this->db->get_where('admin',array('username_admin'=>$username_admin, 'password_admin' => $password_admin))->row();
				$data = array('username_admin' => $yglogin->username_admin);
				$this->session->set_userdata($data);
			if ($this->modelloginadmin->cek_login($username_admin, $password_admin)){
				redirect('admin');
			} else {
				redirect('index');
			}
		}
	}
}
?>