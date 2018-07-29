<?php
defined('BASEPATH') or exit('No direct script access allowed');
class admin extends CI_Controller{

	//-- memanggil fungsi base_url dan model --// 
	function __construct(){
		parent::__construct();
		$this->load->model('adminmodel');
		$this->load->model('adminmodel_2');
		$this->load->helper('url');
	}

	//--memanggil halaman utama dari Admin --//
	function index(){
		$data['admin'] = $this->session->userdata('username_admin');
		$this->load->view('admin/header.php');
		$this->load->view('admin/admin.php' ,$data);
		$this->load->view('admin/footer.php');
	}
	function pasien($id_pasien=NULL){
		$jml = $this->db->get('pasien');
		//pengaturan pagination
 		$config['base_url'] = base_url().'bidan/pasien';
 		$config['total_rows'] = $jml->num_rows();
 		$config['per_page'] = '5';
 		$config['first_page'] = 'Awal';
 		$config['last_page'] = 'Akhir';
 		$config['next_page'] = '&laquo;';
 		$config['prev_page'] = '&raquo;';

		//inisialisasi config
 		$this->pagination->initialize($config);

		//buat pagination
		$data['halaman'] = $this->pagination->create_links();

		//tamplikan data
 		$data['user'] = $this->adminmodel->ambil_pasien($config['per_page'], $id_pasien);
		$data['admin'] = $this->session->userdata('username_admin');
		$this->load->view('admin/header.php');
		$this->load->view('admin/admin_pasien.php' ,$data);
		$this->load->view('admin/footer.php');
	}
	function penyakit($id_pasien=NULL){
		$jml = $this->db->get('pasien');
		//pengaturan pagination
 		$config['base_url'] = base_url().'bidan/penyakit';
 		$config['total_rows'] = $jml->num_rows();
 		$config['per_page'] = '5';
 		$config['first_page'] = 'Awal';
 		$config['last_page'] = 'Akhir';
 		$config['next_page'] = '&laquo;';
 		$config['prev_page'] = '&raquo;';

		//inisialisasi config
 		$this->pagination->initialize($config);

		//buat pagination
		$data['halaman'] = $this->pagination->create_links();

		//tamplikan data
 		$data['user'] = $this->adminmodel->ambil_pasien($config['per_page'], $id_pasien);
		$data['admin'] = $this->session->userdata('username_admin');
		$this->load->view('admin/header.php');
		$this->load->view('admin/admin_penyakit.php' ,$data);
		$this->load->view('admin/footer.php');
	}
	function pengguna($id_user=NULL){
		$jml = $this->db->get('user');
		//pengaturan pagination
 		$config['base_url'] = base_url().'bidan/pengguna';
 		$config['total_rows'] = $jml->num_rows();
 		$config['per_page'] = '5';
 		$config['first_page'] = 'Awal';
 		$config['last_page'] = 'Akhir';
 		$config['next_page'] = '&laquo;';
 		$config['prev_page'] = '&raquo;';

		//inisialisasi config
 		$this->pagination->initialize($config);

		//buat pagination
		$data['halaman'] = $this->pagination->create_links();

		//tamplikan data
 		$data['user'] = $this->adminmodel_2->ambil_user($config['per_page'], $id_user);
		$data['admin'] = $this->session->userdata('username_admin');
		$this->load->view('admin/header.php');
		$this->load->view('admin/admin_pengguna.php' ,$data);
		$this->load->view('admin/footer.php');
	}
	function tambahpengguna(){
		$this->load->view('admin/header.php');
		$this->load->view('admin/admin_pengguna.php');
		$this->load->view('admin/footer.php');
	}
	function tambah_pengguna(){
		//--mengangkap data inputan --//
		$username_user = $this->input->post('username_user');
		$password_user = $this->input->post('password_user');
		$id_level_user = $this->input->post('id_level_user');

		//-- menyiapkan baris yang sesuai di database --//
		$data = array(
			'username_user' => $username_user,
			'password_user' => $password_user,
			'id_level_user' => $id_level_user
		);
		//-- memanggil database dari file kadermodel --//
		$this->adminmodel_2->input_data($data,'user');
		redirect('admin/pengguna');
	}
	function edit_pengguna($id_user){		
		$data2['username'] = $this->session->userdata('username_user');
		$where = array('id_user' => $id_user);
		$data['user'] = $this->adminmodel_2->edit_data($where,'user')->result();
		$this->load->view('admin/header.php');
		$this->load->view('admin/admin_edit.php',$data,$data2);
		$this->load->view('admin/footer.php');
	}
	function update(){
    	$id_user = $this->input->post('id_user');
	    $username_user = $this->input->post('username_user');
		$password_user = $this->input->post('password_user');
		$id_level_user = $this->input->post('id_level_user');
 
		$data = array(
			'id_user' => $id_user,
			'username_user' => $username_user,
			'password_user' => $password_user,
			'id_level_user' => $id_level_user
			);
 
	$where = array(
		'id_user' => $id_user
	);
 
	$this->adminmodel_2->update_data($where,$data,'user');
	redirect('admin/pengguna');
}
	function laporan($id_pasien=NULL){
		$jml = $this->db->get('pasien');
		//pengaturan pagination
 		$config['base_url'] = base_url().'bidan/pasien';
 		$config['total_rows'] = $jml->num_rows();
 		$config['per_page'] = '5';
 		$config['first_page'] = 'Awal';
 		$config['last_page'] = 'Akhir';
 		$config['next_page'] = '&laquo;';
 		$config['prev_page'] = '&raquo;';

		//inisialisasi config
 		$this->pagination->initialize($config);

		//buat pagination
		$data['halaman'] = $this->pagination->create_links();

		//tamplikan data
 		$data['user'] = $this->adminmodel->ambil_pasien($config['per_page'], $id_pasien);
		$data['admin'] = $this->session->userdata('username_admin');
		$this->load->view('admin/header.php');
		$this->load->view('admin/admin_laporan.php' ,$data);
		$this->load->view('admin/footer.php');
	}
	
	function keluar(){
		$this->session->sess_destroy();
		redirect('adminlogin');
	}
}
	?>