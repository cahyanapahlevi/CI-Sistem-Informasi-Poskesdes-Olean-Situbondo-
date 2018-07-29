<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/landing_user.css") ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/file/bootstrap/dist/css/bootstrap.min.css") ?>">
  <script src="<?php echo base_url("assets/js/jquery.min.js") ?>"></script>
  <script src="<?php echo base_url("assets/file/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
<style>
.hero-image {
  background-image: url("<?php echo base_url("assets/img/hujan.jpg");?>");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>
</head>
<body>
  <div class="hero-image">
     <div class="hero-text2">
      <form>
  <table width="910" border="1" align="center" cellpadding="0" cellspacing="0" style="background-color: white;border-radius:10px; ">
    <tr> 
      <td width="15%"><div align="left">
        <h2 align="center"></h2>
      </div></td>
      <td width="85%"><div align="center" class="style1"><strong>Riwayat Pasien:<br>
    Poskesdes Olean</strong><br>
Jl Olean NO 1 kecamatan situbondo kabupaten situbondo </div></td>
    </tr>
    <tr>
      <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="2"><div align="center" class="style1"></div></td>
        </tr>
        <tr>
          <td><input name="cetak" type="button" id="cetak" value="Cetak" onClick="Cetakan()"></td>
          <td>&nbsp;</td>
        </tr>
         <?php
    foreach($user as $u){ 
    ?>
    <tr>
          <td>Biodata pasien</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="19%"><input type="hidden" id_pasien="<?= $u['id_pasien'] ; ?>">Nama</td>
          <td width="81%">: <?php echo $u['nama_pasien']; ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>: <?php echo $u['alamat_pasien']; ?></td>
        </tr>
        <tr>
          <td>Umur </td>
          <td>: <?php echo $u['umur_pasien']; ?></td>
        </tr>
        <tr>
          <td>Jenis Kelamin </td>
          <td>: <?php echo $u['jk_pasien']; ?></td>
        </tr>
        <tr>
          <td>Nomor Hp </td>
          <td>: <?php echo $u['nomorhp_pasien']; ?></td>
        </tr>
         <tr>
          <td>&nbsp; </td>
          <td>&nbsp;</td>
        </tr>
         <tr>
          <td>Diagnosa Pasien </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Keluhan </td>
          <td>: <?php echo $u['keluhan_pasien']; ?></td>
        </tr>
        <tr>
          <td>Penyakit </td>
          <td>: <?php echo $u['penyakit_pasien']; ?></td>
        </tr>
        <tr>
          <td>sebab </td>
          <td>: <?php echo $u['sebab_pasien']; ?></td>
        </tr>
        <tr>
          <td>tindakan </td>
          <td>: <?php echo $u['tindakan_pasien']; ?></td>
        </tr>
        <tr>
          <td>Obat </td>
          <td>: <?php echo $u['namaobat_pasien']; ?></td>
        </tr>
        <tr>
          <td>rumahsakit </td>
          <td>: <?php echo $u['namarumahsakit_pasien']; ?></td>
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
                        <td width="300"><?php echo "Poskesdes Olean" . date("j F Y "); ?></td>
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
                        <td>Petugas</td>
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
    <?php } ?>
  </table>
</form></div></div>
  
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