<?php
include_once 'dbconf.php';
$id = $_POST['id'];
$nm = $_POST['nm'];
$ni = $_POST['ni'];
$tp = $_POST['tp'];
$em = $_POST['em'];
$pr = $_POST['pr'];
$hp = $_POST['hp'];
$ati = $_POST['ati'];
$asl = $_POST['asl'];

	$con->query("UPDATE user SET nama='$nm', nim='$ni', tipe='$tp', email='$em',prodi='$pr', nohp='$hp', almting='$ati',almasal='$asl' WHERE id=".$id);

header("Location: ?page=user");
?>