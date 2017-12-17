<?php
include 'dbconf.php';

if(isset($_POST['masuk'])){
$username = $_POST['username'];
$password = $_POST['password'];
$login    = mysqli_query($connect, "select * from admin where username='$username' and password='$password'");
$result   = mysqli_num_rows($login);
if($result>0){
    $user = mysqli_fetch_array($login);
    session_start();
    $_SESSION['login_admin'] = $user['username'];
    header ('location : $page=home');
}else{
    header ('location : $page=login');
}
}
?>