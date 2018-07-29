<body>

<nav class="navbar navbar-light" style="background-color: #2c3e50;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand"  href="<?php echo base_url("admin")?>">Admin page</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
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

?>,<?php echo $this->session->userdata('username_admin') ?> <i class="fa fa-cog" aria-hidden="true"></i></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url("admin/keluar");?>">log out <i class="fa fa-sign-out" aria-hidden="true" style="float: right;"></i></a></li>
        </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-left">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p style="text-align: center;"><img src="<?php echo base_url("assets/img/user.png"); ?>" class="img-responsive img-circle" width="304" height="236"><br>
      	Anda Masuk sebagai<br>
         <?php echo $this->session->userdata('username_admin') ?> <a href="<?php echo base_url("admin/keluar");?>"><i class="fa fa-sign-out" style="color: white;"></i></a></p>
         <div class="icon-bar">
      <div><a href="<?php echo base_url("admin")?>"><i class="fa fa-tachometer"></i> Dashboard</a></div>
      <div><a href="<?php echo base_url("admin/pasien")?>"><i class="fa fa-wheelchair"></i> Data Pasien</a></div>
      <div><a href="<?php echo base_url("admin/penyakit")?>"><i class="fa fa-heartbeat"></i> Data penyakit</a></div>
      <div><a class="active" href="<?php echo base_url("admin/pengguna")?>"><i class="fa fa-user"></i> Data pengguna</a></div>
      <div><a href="<?php echo base_url("admin/laporan")?>"><i class="fa fa-sticky-note-o"></i> laporan</a></div>
    </div>
    </div>
    <div class="col-sm-10 text-left">
      <h6>&nbsp;</h6>
   <div class="panel-body">
      <div class="panel panel-default">
  <div class="panel-body" style="background-color: #27ae60;">
    <form class="form-horizontal" action="<?php echo base_url(). 'admin/tambah_pengguna'; ?>" method="post">
              <div class="form-group">
                  <label for="focusedinput" class="col-sm-12 control-label"><center><h1><i class="fa fa-user"></i> Pengguna</h1></center></label>                
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Nama pengguna</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="username_user">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">password</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="password_user">
                  </div>                  
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Sebagai</label>
                  <div class="col-sm-8">
                     <select class="form-control1" name="id_level_user">
  <option value="0">Kader</option>
  <option value="1">bidan</option>
</select> 
                  </div>
                </div>                
             <form>
                <div style="text-align: left;">
                   <div class="col-sm-8 col-sm-offset-2">
                       <button class="btn-success btn" value="tambahpengguna">Submit</button>
                     </div>
                  </div>
              </form>
            </form>
          <br/>
              <br/><br>
               <table id="myTable" class="table table-hover">
    <thead>
      <tr class="header">
        <th>No</th>
        <th>Nama penggguna</th>
        <th>password pengguna</th>
        <th>sebagai</th>
        <th>aksi</th>
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
                <td><?php echo $u->username_user; ?></td>
                <td><?php echo $u->password_user; ?></td>
                <td><?php echo $u->id_level_user; ?></td>
                <td><?php echo anchor('admin/edit_pengguna/'.$u->id_user,'<button type="button" class="btn btn-danger"><i class="fa fa-pencil"></i></button>'); ?></td>
            </tr>
            </tbody>
            <?php
 }}
 ?>
  </table>
  <p>* di kolom sebagai tanda 0 berarti akun kader dan 1 sebagai akun bidan</p>
  <table width="100%">
            <tr>
              <td style="width: 50%;">Jumlah data :
               <?php 
                $this->db->like('username_user');
                $this->db->from('user');
                echo $this->db->count_all_results(); ?>
              </td>
              <td style="width: 50%;"><div class="halaman" style="text-align: right;">Halaman : <?php echo $halaman;?></div>
              </td>
            </tr>
          </table>
            </div>
          </div>
         </div>
       </div>
    </div>
</div> 