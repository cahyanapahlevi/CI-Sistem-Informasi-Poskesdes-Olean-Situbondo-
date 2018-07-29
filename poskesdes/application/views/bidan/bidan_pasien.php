<body onload="startTime()">

     <nav class="navbar navbar-light" style="background-color: #e3f2fd;width: 1500px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url("bidan")?>">Poskesdes</a>
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
  <div><a href="<?php echo base_url("bidan")?>"><i class="fa fa-home" style="float: left;"></i>&nbsp;Home</a> </div>
  <div><a class="active" href="<?php echo base_url("bidan/pasien")?>"><i class="fa fa-users" aria-hidden="true" style="float: left;"></i>&nbsp; Pasien</a> </div>
  <div> <a href="<?php echo base_url("bidan/laporan")?>"><i class="fa fa-envelope" style="float: left;"></i>&nbsp; Laporan</a></div>
</div>
</div>
</div>
    <div class="col-sm-10">
<div class="content4">
  <h1 style="text-align: center;"> Data Pendaftar</h1>
   <div class="container">
<h4 style="text-align:right;">Cari : <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search .."></h4>
 <div class="table-responsive">        
  <table id="myTable" class="table table-hover">
    <thead>
      <tr class="header">
        <th>No</th>
        <th>Nama</th>
        <th>Nomor KK</th>
        <th>Alamat</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>Nomor HP</th>
        <th>Aksi</th>
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
                <td><?php echo anchor('bidan/edit/'. $u -> id_pasien, 'diagnosa');?>
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
              <td style="width: 50%;"><div class="halaman" style="text-align: right;">Halaman : <?php echo $halaman;?></div></td>
      </tr>
  </table>
  
</div>
</div>
</div>
</div>
    </div>
  </div>