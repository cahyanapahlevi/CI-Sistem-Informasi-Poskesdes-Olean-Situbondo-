<?php
defined('BASEPATH') or exit('No direct script access allowed');
class bidan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('bidanmodel');
		$this->load->helper('url');
	}
	function index(){
		$data['username'] = $this->session->userdata('username_user');
		$this->load->view('bidan/header.php');
		$this->load->view('bidan/bidan.php',$data);
		$this->load->view('bidan/footer.php');
	}
	public function pasien($id_pasien=NULL)
	{
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
 		$data['user'] = $this->bidanmodel->ambil_pasien($config['per_page'], $id_pasien);
		$data['username'] = $this->session->userdata('username_user');
		$this->load->view('bidan/header.php');
		$this->load->view('bidan/bidan_pasien.php',$data);
		$this->load->view('bidan/footer_lap.php');
	}
	public function detailpasien($id_pasien=NULL)
	{
		$jml = $this->db->get('pasien');
		//pengaturan pagination
 		$config['base_url'] = base_url().'bidan/detailpasien';
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
 		$data['user'] = $this->bidanmodel->ambil_pasien($config['per_page'], $id_pasien);
		$data['username'] = $this->session->userdata('username_user');
		$this->load->view('bidan/header.php');
		$this->load->view('bidan/bidan_detail.php',$data);
		$this->load->view('bidan/footer_lap.php');
	}
	function edit($id_pasien){		
		$data2['username'] = $this->session->userdata('username_user');
		$where = array('id_pasien' => $id_pasien);
		$data['user'] = $this->bidanmodel->edit_data($where,'pasien')->result();
		$this->load->view('bidan/header.php');
		$this->load->view('bidan/bidan_diagnosa.php',$data,$data2);
		$this->load->view('bidan/footer_diagnosa.php');
	}
	function updatepasien(){
 	$id_pasien = $this->input->post('id_pasien');
	$nama_pasien = $this->input->post('nama_pasien');
	$nomorkk_pasien = $this->input->post('nomorkk_pasien');
	$alamat_pasien =$this->input->post('alamat_pasien');
	$umur_pasien = $this->input->post('umur_pasien');
	$jk_pasien = $this->input->post('jk_pasien');
	$nomorhp_pasien =$this->input->post('nomorhp_pasien');
	$keluhan_pasien =$this->input->post('keluhan_pasien');
	$penyakit_pasien =$this->input->post('penyakit_pasien');
	$sebab_pasien =$this->input->post('sebab_pasien');
	$tindakan_pasien =$this->input->post('tindakan_pasien');
	$namarumahsakit_pasien =$this->input->post('namarumahsakit_pasien');
	$namaobat_pasien =$this->input->post('namaobat_pasien');
 
	$data = array(
		'id_pasien' => $id_pasien,
		'nama_pasien' => $nama_pasien,
		'nomorkk_pasien' => $nomorkk_pasien,
		'alamat_pasien' => $alamat_pasien,
		'umur_pasien' => $umur_pasien,
		'jk_pasien' => $jk_pasien,
		'nomorhp_pasien' => $nomorhp_pasien,
		'keluhan_pasien' => $keluhan_pasien,
		'penyakit_pasien' => $penyakit_pasien,
		'sebab_pasien' => $sebab_pasien,
		'tindakan_pasien' => $tindakan_pasien,
		'namarumahsakit_pasien' => $namarumahsakit_pasien,
		'namaobat_pasien' => $namaobat_pasien
	);
 
	$where = array(
		'id_pasien' => $id_pasien
	);
 
	$this->bidanmodel->update_data($where,$data,'pasien');
	redirect('bidan/detailpasien');
}
	public function laporan($id_pasien=NULL)
	{
		
		$jml = $this->db->get('pasien');
		//pengaturan pagination
 		$config['base_url'] = base_url().'bidan/detailpasien';
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
 		$data['user'] = $this->bidanmodel->ambil_pasien($config['per_page'], $id_pasien);
		$data['username'] = $this->session->userdata('username_user');
		$this->load->view('bidan/header.php');
		$this->load->view('bidan/bidan_laporan.php',$data);
		$this->load->view('bidan/footer_lap.php');
	}
	public function cetaklaporan()
	{
		$data['user'] = $this->bidanmodel->tampil_data()->result();
		$this->load->view('bidan/laporan_bidan.php',$data);
	}
	public function cetak1($id_pasien)
	{
		$data['user'] = $this->bidanmodel->dapat($id_pasien);
		$this->input->post('id_pasien');
		$this->load->view('bidan/surat/surat_rujukan.php',$data);
	}
	public function biodata($id_pasien)
	{
		$data['user'] = $this->bidanmodel->dapat($id_pasien);
		$this->input->post('id_pasien');
		$this->load->view('bidan/biodata.php',$data);
	}
	public function cetak2($id_pasien)
	{
		$data['user'] = $this->bidanmodel->dapat($id_pasien);
		$this->input->post('id_pasien');
		$this->load->view('bidan/surat/surat_periksa',$data);
	}
	function keluar(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
?>