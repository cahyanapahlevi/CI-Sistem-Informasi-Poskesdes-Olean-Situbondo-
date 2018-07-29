<?php 
 
class modelcetak extends CI_Model{
	function prosescetak($nama_pasien, $alamat_pasien,$umur_pasien,$jk_pasien,$keluhan_pasien,$penyakit_pasien,$sebab_pasien,$tindakan_pasien,$namaobat_pasien){
		$this->db->where('nama_pasien',$nama_pasien);
		$this->db->where('alamat_pasien',$alamat_pasien);
		$this->db->where('umur_pasien', $umur_pasien);
		$this->db->where('jk_pasien', $jk_pasien);
		$this->db->where('keluhan_pasien', $keluhan_pasien);
		$this->db->where('penyakit_pasien', $penyakit_pasien);
		$this->db->where('sebab_pasien', $sebab_pasien);
		$this->db->where('tindakan_pasien', $tindakan_pasien);
		$this->db->where('namaobat_pasien', $namaobat_pasien);
		return $this->db->get('pasien')->row();
	}
	}
	?>	