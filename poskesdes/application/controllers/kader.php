<?php
defined('BASEPATH') or exit('No direct script access allowed');
class kader extends CI_Controller{

	//-- memanggil fungsi base_url dan model --// 
	function __construct(){
		parent::__construct();
		$this->load->model('kadermodel');
		$this->load->helper('url');
	}

	//--memanggil halaman utama dari kader --//
	function index($id_pasien=NULL){
		$jml = $this->db->get('pasien');
		//pengaturan pagination
 		$config['base_url'] = base_url().'kader/index';
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
 		$data['user'] = $this->kadermodel->ambil_pasien($config['per_page'], $id_pasien);
		$data['username'] = $this->session->userdata('username_user');
		$this->load->view('kader/header.php');
		$this->load->view('kader/kader_detail.php' ,$data);
		$this->load->view('kader/footer.php');
	}
	function tambah(){
		$data['username'] = $this->session->userdata('username_user');
		$this->load->view('kader/header.php');
		$this->load->view('kader/kader.php' ,$data);
		$this->load->view('kader/footer.php');
	}
	function tambah_pasien(){
		//--mengangkap data inputan --//
		$id_pasien = $this->input->post('id_pasien');
		$nama_pasien = $this->input->post('nama_pasien');
		$nomorkk_pasien = $this->input->post('nomorkk_pasien');
		$alamat_pasien = $this->input->post('alamat_pasien');
		$umur_pasien = $this->input->post('umur_pasien');
		$jk_pasien = $this->input->post('jk_pasien');
		$nomorhp_pasien = $this->input->post('nomorhp_pasien');

		//-- menyiapkan baris yang sesuai di database --//
		$data = array(
			'id_pasien' => $id_pasien,
			'nama_pasien' => $nama_pasien,
			'nomorkk_pasien' => $nomorkk_pasien,
			'alamat_pasien' => $alamat_pasien,
			'umur_pasien' => $umur_pasien,
			'nomorhp_pasien' => $nomorhp_pasien,
			'jk_pasien' => $jk_pasien
		);
		//-- memanggil database dari file kadermodel --//
		$this->kadermodel->input_data($data,'pasien');
		redirect('kader/index');
	}
	public function cetak()
	{
		$data['user'] = $this->kadermodel->tampil_data()->result();
		$this->load->view('kader/cetak/data_pasien.php',$data);
	}
	function keluar(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
	?>