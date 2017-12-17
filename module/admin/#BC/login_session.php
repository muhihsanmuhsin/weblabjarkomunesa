<?php
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
$connection = mysqli_connect("localhost", "root", "");
// Seleksi Database
$db = mysqli_select_db("dblabjarkom", $connection);
session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['login_admin'];
// Ambil nama admin berdasarkan username admin dengan mysql_fetch_assoc
$ses_sql=mysqli_query("select username from admin where username='$username'", $connection);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($connection); // Menutup koneksi
header('Location: ?page=home'); // Mengarahkan ke Home Page
}
?>