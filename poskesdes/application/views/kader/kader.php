<body onload="startTime()">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url("kader")?>">Poskesdes</a>
    </div>
    <ul class="nav navbar-nav">
      <li style="width: 300px;"><a href="#"></a></li>
    </ul>
    <a class="nav navbar-nav"  style="width: 500px;text-align: center;"><div id="txt"></div><?php

date_default_timezone_set("Asia/Jakarta");

$b = time();
$hour = date("G",$b);

if ($hour>=0 && $hour<=11)
{
echo "AM";
}
elseif ($hour >=13 && $hour<=23)
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
          <li><a href="<?php echo base_url("kader/keluar");?>">log out <i class="fa fa-sign-out" aria-hidden="true" style="float: right;"></i></a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<div class="content">
<h1 style="text-align: center;">Masukkan Data</h1>
<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
<form action="<?php echo base_url(). 'kader/tambah_pasien'; ?>" method="post">
    <table style="margin:10px auto;">
      <tr>
        <td style="width:20%;">Nama :</td>
        <td style="width: 80%;"><input class="form-control" type="text" name="nama_pasien"><br></td>
      </tr>
      <tr>
        <td>Nomor kk :</td>
        <td><input class="form-control" type="text" name="nomorkk_pasien"><br></td>
      </tr>
      <tr>
        <td>Alamat :</td>
        <td><input class="form-control" type="text" name="alamat_pasien"><br></td>
      </tr>
      <tr>
        <td>Umur :</td>
        <td><input class="form-control" type="text" name="umur_pasien"><br></td>
      </tr>
      <tr>
        <td>Jenis kelamin :</td>
        <td><input type="radio" name="jk_pasien" value="pria"> Pria
        <input type="radio" name="jk_pasien" value="wanita"> Wanita<br><br></td>
      </tr>
      <tr>
        <td>Nomor hp :</td>
        <td><input class="form-control" type="text" name="nomorhp_pasien"><br></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" class="btn-success btn" value="tambah"><i class="fa fa-floppy-o"></i> Submit</a></button>
      </tr>
    </table>
  </form>
</div>