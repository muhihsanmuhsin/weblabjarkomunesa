<?php
include('loginserv.php');
include("../../dbconf.php");


if(isset($_SESSION['login_admin'])){
header("location: ?page=home");
}
?>
<style type="text/css">
.textbox {
	width: 70%;
}
.textbox1 {
	width: 50%;
}
.textbox2 {
	width: 30%;
}
.fpad{
	padding-left: 15%;
}
.fpad1{
	padding-left: 27%;
}

</style>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="menu.css" rel="stylesheet">
    <title>Web Lab Jarkom - UNESA</title>

  </head>
  <style>
  .h3mode{
	  color:#FBFCED;text-align:right;
  }
  </style>
  <body>
  
  <div class="menu">
<ul>
 <li><a href="?page=home" >Home</a></li>
	<li><a href="#">Laporan</a>
  <ul>
   <li><a href="?page=baru">DB Barang Saat ini</a></li>
   <li><a href="?page=peminjaman">DB Peminjaman</a></li>
   <li><a href="?page=user">DB User</a></li>
  </ul>
 </li>
 <li><a href="?page=kontak-kami">Hubungi kami</a></li>
 <li><a href="logout.php">Logout ADMIN</a></li>
 <h3 class="h3mode">ADMIN MODE</h3> 
</ul>

</div>
  
  </body>
</html>