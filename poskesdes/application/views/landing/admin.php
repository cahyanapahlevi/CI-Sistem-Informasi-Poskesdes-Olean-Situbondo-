<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/landing_admin.css") ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/file/bootstrap/dist/css/bootstrap.min.css") ?>">
  <script src="<?php echo base_url("assets/js/jquery.min.js") ?>"></script>
  <script src="<?php echo base_url("assets/file/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
</head>
<body>

<div class="hero-image">
  <div class="hero-text">
  <h1> Welcome Admin </h1>
   <div class="panel panel-default">
    <div class="panel-heading" style="background-color:#7986CB; font-size: 20px;">
    <span class="glyphicon glyphicon-user"></span>Login
    </div>
    <div class="panel-body" style="background-color: #F5F5F5;">
    <form action="<?php echo base_url('adminlogin/proses'); ?>" method="post">
    <table>
  <tr>
    <td>Username :</td>
    <td><input class="form-control" type="text" name="username_admin"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>password :</td>
    <td><input class="form-control" type="password" name="password_admin"></td>
  </tr>
</table>
    <br><button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-off"></span> login </button>
    </form>
    </div>
  </div>
  <p>&copy; 2017 created by unamed</p>
  </div>
</div>
</body>
</html>
