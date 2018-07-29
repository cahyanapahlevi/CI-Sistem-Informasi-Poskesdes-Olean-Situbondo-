<!DOCTYPE html>
<html lang="en">
<head>
  <title>kader page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url("assets/file/bootstrap/dist/css/bootstrap.min.css") ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="<?php echo base_url("assets/file/font-awesome/css/font-awesome.min.css")?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/kader.css") ?>">
  <script src="<?php echo base_url("assets/js/jquery.min.js")?>"></script>
  <script src="<?php echo base_url("assets/file/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
  <style type="text/css">
  body  {
    background-image: url("<?php echo base_url("assets/img/background1.jpg") ?>");
    background-color: #cccccc;
    }
   </style>
</head>