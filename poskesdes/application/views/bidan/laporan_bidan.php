<html>
<head>
  <style type="text/css">

.style1 {font-size: large}

</style>
</head>
<body>
	<title>Cetak laporan</title>
	<form>
	<table width="910" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="15%"><div align="left">
        <h2 align="center"><img src="images/logoPolije.png" width="133" height="124"></h2>
      </div></td>
      <td width="85%"><div align="center" class="style1"><strong>Dinas Kesehatan <br>
	  Kabupatan Situbondo</strong><br>
Jl raya surabaya - banyuwangi no 1 situbondo kabupaten situbondo </div></td>
    </tr>
    <tr> 
      <td colspan="2"></td>
    </tr>
    <tr>
      <td colspan="2"><hr noshade></td>
    </tr>
    <tr>
      <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="2"><div align="center" class="style1"><strong>Data periksa pasien </strong><br>
          <?php echo "Poskesdes Olean " . date("j F Y "); ?>
        </div></td>
        </tr>
        <tr>
          <td><input name="cetak" type="button" id="cetak" value="Cetak" onClick="Cetakan()"></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <div class="table-responsive">        
  <table width="910" border="1" align="center" cellpadding="0" cellspacing="0">
    <thead>
      <tr class="header">
        <th>No</th>
        <th>Nama</th>
        <th>Nomor KK</th>
        <th>Alamat</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>Nomor HP</th>
        <th>keluhan</th>
        <th>penyakit</th>
        <th>sebab</th>
        <th>tindakan</th>
        <th>obat</th>
        <th>rumah sakit</th>
      </tr>
    </thead>
     <?php
 //kalo data tidak ada didatabase
 if(empty($user))
 {
 echo "<tr><td colspan=\"6\">Data tidak tersedia</td></tr>";
 }else
 {
 $no = 1;
 foreach($user as $u)
 {
 ?>
    <tbody>
      <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $u->nama_pasien; ?></td>
                <td><?php echo $u->nomorkk_pasien; ?></td>
                <td><?php echo $u->alamat_pasien; ?></td>
                <td><?php echo $u->umur_pasien; ?></td>
                <td><?php echo $u->jk_pasien; ?></td>
                <td><?php echo $u->nomorhp_pasien; ?></td>
                <td><?php echo $u->keluhan_pasien; ?></td>
                <td><?php echo $u->penyakit_pasien; ?></td>
                <td><?php echo $u->sebab_pasien; ?></td>
                <td><?php echo $u->tindakan_pasien; ?></td>
                <td><?php echo $u->namaobat_pasien; ?></td>
                <td><?php echo $u->namarumahsakit_pasien; ?></td>
            </tr>
            </tbody>
            <?php
 }}
 ?>
  </table>
  <table width="100%">
      <tr>
          <td style="width: 50%;">Jumlah data :
  <?php 
$this->db->like('nama_pasien');
$this->db->from('pasien');
echo $this->db->count_all_results(); 
?></td>
              <td style="width: 50%;"></td>
      </tr>
  </table>
  
</div></td>
        </tr>
        <tr>
          <td>&nbsp; </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp; </td>
          <td>&nbsp;</td>
        </tr>
		        <tr>
          <td colspan="2">        
										
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="19" colspan="2"></td>
                        <td width="300">Petugas</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td height="19">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td height="19">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td height="19">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td height="19">&nbsp;</td>
                        <td><?php echo $this->session->userdata('username_user') ?></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td height="19">&nbsp;</td>
                        <td>NIP. 12345678</td>
                      </tr>
                    </table>
                  </td>
              </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
</form>
<script>
function Cetakan()
{
  var x = document.getElementsByName("cetak");
  for(i = 0; i < x.length ; i++)
  {
  		x[i].style.visibility = "hidden";
  }
  window.print();
  alert("Jangan di tekan tombol OK sebelum dokumen selesai tercetak!");
  for(i = 0; i < x.length ; i++)
  {
  		x[i].style.visibility = "visible";
  }
}
</script>

</body>
</html>