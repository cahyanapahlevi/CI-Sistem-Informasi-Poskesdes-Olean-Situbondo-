<html>
<head>
  <style type="text/css">

.style1 {font-size: large}

</style>
</head>
<body>
	<title>Cetak surat Rujukan</title>
	<form>
	<table width="910" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="15%"><div align="left">
        <h2 align="center"><img src="images/logoPolije.png" width="133" height="124"></h2>
      </div></td>
      <td width="85%"><div align="center" class="style1"><strong>Dinas Kesehatan Kabupatan Situbondo<br>
	  Poskesdes Olean</strong><br>
Jl Olean NO 1 kecamatan situbondo kabupaten situbondo </div></td>
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
          <td colspan="2"><div align="center" class="style1"><strong>Surat Rujukan </strong></div></td>
        </tr>
        <tr>
          <td><input name="cetak" type="button" id="cetak" value="Cetak" onClick="Cetakan()"></td>
          <td>&nbsp;</td>
        </tr>
        <?php
    foreach($user as $u){ 
    ?>
        <tr>
          <td width="19%"><input type="hidden" id_pasien="<?= $u['id_pasien'] ; ?>">Yth. Dokter Umum</td>
          <td width="81%">: Dr.Amalia</td>
        </tr>
        <tr>
          <td><div align="left">Di RSU</div></td>
          <td>: <?php echo $u['namarumahsakit_pasien']; ?></td>
        </tr>
        <tr>
          <td>&nbsp; </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
         <td colspan="3"><div align="left">Mohon pemeriksaan dan pengobatan lebih lanjut terhadap penderita,</div></td>
        </tr>
        <tr>
          <td>&nbsp; </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="19%">NAMA</td>
          <td width="81%">: <?php echo $u['nama_pasien']; ?></td>
        </tr>
        <tr>
          <td><div align="left">Nomor KK</div></td>
          <td>: <?php echo $u['nomorkk_pasien']; ?></td>
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
          <td>Keluhan </td>
          <td>: <?php echo $u['keluhan_pasien']; ?></td>
        </tr>
        <tr>
          <td>Diagnosa sementara </td>
          <td>: <?php echo $u['penyakit_pasien']; ?></td>
        </tr>
        <tr>
          <td>sebab </td>
          <td>: <?php echo $u['sebab_pasien']; ?></td>
        </tr>
        <tr>
          <td>tindakan Sementara</td>
          <td>: <?php echo $u['tindakan_pasien']; ?></td>
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
          <td colspan="3">
          	Demikian surat rujukan ini kami kirim, kami mohon balasan atas surat rujukan ini. Atas perhatian Bapak/Ibu kami ucapkan terima kasih.
          	<td> &nbsp;</td>  
</td>
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
                        <td width="300"><?php echo "Poskesdes Olean " . date("j F Y "); ?></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td height="19">&nbsp;</td>
                        <td>Hormat Kami</td>
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
                        <td>Poskesdes Olean</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td height="19">&nbsp;</td>
                        <td>SIP. 12345678</td>
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