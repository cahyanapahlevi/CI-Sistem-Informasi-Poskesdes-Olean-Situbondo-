<body onload="startTime()">

    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url("bidan")?>">Poskesdes</a>
    </div>
    <ul class="nav navbar-nav">
      <li style="width: 300px;"><a href=""></a></li>
    </ul>
     <a class="nav navbar-nav"  style="width: 500px;text-align: center;"><div id="txt"></div><?php

date_default_timezone_set("Asia/Jakarta");

$b = time();
$hour = date("G",$b);

if ($hour>=0 && $hour<=11)
{
echo "AM";
}
elseif ($hour >=12 && $hour<=23)
{
echo "PM ";
}
?></a>
    <ul class="nav navbar-nav navbar-right">
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php

date_default_timezone_set("Asia/Jakarta");

$b = time();
$hour = date("G",$b);

if ($hour>=0 && $hour<=11)
{
echo "Selamat Pagi ";
}
elseif ($hour >=12 && $hour<=14)
{
echo "Selamat Siang ";
}
elseif ($hour >=15 && $hour<=17)
{
echo "Selamat Sore ";
}
elseif ($hour >=17 && $hour<=18)
{
echo "Selamat Petang ";
}
elseif ($hour >=19 && $hour<=23)
{
echo "Selamat Malam ";
}

?>,<?php echo $this->session->userdata('username_user') ?> <i class="fa fa-cog" aria-hidden="true"></i></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url("bidan/keluar");?>">log out <i class="fa fa-sign-out" aria-hidden="true" style="float: right;"></i></a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<div class="container-fluid">
<div class="row">
    <div class="col-sm-2">
<div class="content3">
  <div class="icon-bar">
  <div><a  href="<?php echo base_url("bidan")?>"><i class="fa fa-home" style="float: left;"></i>&nbsp;Home</a> </div>
  <div><a class="active" href="<?php echo base_url("bidan/pasien")?>"><i class="fa fa-users" aria-hidden="true" style="float: left;"></i>&nbsp; Pasien</a> </div>
  <div> <a href="<?php echo base_url("bidan/laporan")?>"><i class="fa fa-envelope" style="float: left;"></i>&nbsp; Laporan</a></div>
</div>
</div>
</div>
    <div class="col-sm-10">
<div class="content5">
<div id="tabel">
  <h1 style="text-align: center;">Masukkan Data</h1>
  <?php foreach($user as $u){ ?>
  <form class="form-horizontal" action="<?php echo base_url(). 'bidan/updatepasien'; ?>" method="post">
    <input type="hidden"  name="id_pasien" value="<?php echo $u->id_pasien; ?>">
    <table style="margin:10px auto;">
      <tr>
        <td style="width:20%;">Nama :</td>
        <td style="width: 80%;"><input class="form-control" type="text" name="nama_pasien" value="<?php echo $u->nama_pasien ?>" ><br></td>
      </tr>
      <tr>
        <td>Nomor kk :</td>
        <td><input class="form-control" type="text" name="nomorkk_pasien" value="<?php echo $u->nomorkk_pasien ?>" ><br></td>
      </tr>
      <tr>
        <td>Alamat :</td>
        <td><input class="form-control" type="text" name="alamat_pasien" value="<?php echo $u->alamat_pasien ?>" ><br></td>
      </tr>
      <tr>
        <td>Umur :</td>
        <td><input class="form-control" type="text" name="umur_pasien" value="<?php echo $u->umur_pasien ?>" ><br></td>
      </tr>
      <tr>
        <td>Jenis kelamin :</td>
        <td><input class="form-control" type="text" name="jk_pasien" value="<?php echo $u->jk_pasien ?>" ><br></td>
      </tr>
      <tr>
        <td>Nomor hp :</td>
        <td><input class="form-control" type="text" name="nomorhp_pasien" value="<?php echo $u->nomorhp_pasien ?>" ><br></td>
      </tr>
      <tr>
        <td>Keluhan :</td>
        <td><input class="form-control" type="text" name="keluhan_pasien"><br></td>
      </tr>
      <tr>
        <td>Diagnosa :</td>
        <td><input class="form-control" type="text" name="penyakit_pasien"><br></td>
      </tr>
      <tr>
        <td>Sebab :</td>
        <td><input class="form-control" type="text" name="sebab_pasien"><br></td>
      </tr>
      <tr>
        <td> Tindakan</td>
        <td><input type="checkbox" name="tindakan_pasien" value="suntik">Suntik<br>
           <input type="checkbox" name="tindakan_pasien" value="rumah_sakit">Rujukan
           <select name="namarumahsakit_pasien">
  <option value="">--Pilih Rumah Sakit --</option>
  <option value="rs_umum">Rumah Sakit Umum</option>
  <option value="rs_elizabeth">Rumah Sakit Elizabeth</option>
</select><br>
         </td>
      </tr>
      <tr>
        <td>Obat :</td>
        <td><br><input class="form-control" type="text" name="namaobat_pasien"><br></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><br><button type="submit" class="btn-success btn" value="updatepasien"><i class="fa fa-floppy-o"></i> Submit</a></button>
      </tr>
   </table>
  </form>
   <?php } ?>
   </div>

</div>
</div>
    </div>
  </div>