<?php
include('login_proses.php');

if(isset($_SESSION['login_admin'])){
header("location: ?page=home");
}
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login Admin</title>
  <!-- Bootstrap core CSS-->
  <link href="BC/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="BC/css/font.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="BC/css/sba.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Masukkan Email/Id Admin</label>
            <input class="form-control" name="username" id="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="password" id="password" type="password" placeholder="Password">
          </div>
          <input class="btn btn-primary btn-block" type="submit" id="masuk" name="masuk" value="Login">
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="BC/js/jquery.min.js"></script>
  <script src="BC/js/pp.js"></script>
  <script src="BC/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="BC/jeas/jquery.easing.min.js"></script>
</body>

</html>