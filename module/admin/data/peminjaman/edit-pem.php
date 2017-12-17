<?php
include_once 'dbconf.php';
$id = $_POST['id'];
$cek = $_POST['cek'];
$nm = $_POST['nm'];
$ni = $_POST['ni'];
$b1 = $_POST['b1'];
$b2 = $_POST['b2'];
$b3 = $_POST['b3'];
$b4 = $_POST['b4'];
$b5 = $_POST['b5'];
$tp = $_POST['tp'];
$pr = $_POST['pr'];
$hp = $_POST['hp'];
$pin = $_POST['pin'];
$kem = $_POST['kem'];
$ati = $_POST['ati'];
$asl = $_POST['asl'];

	$con->query("UPDATE peminjaman SET nama='$nm', nim='$ni', tipe='$tp', prodi='$pr',nohp='$hp',tglpin='$pin', tglkem='$kem', almting='$ati', almasal='$asl',barang1='$b1', barang2='$b2', barang3='$b3', barang4='$b4',barang5='$b5',cekkembali='$cek' WHERE id=".$id);

header("Location: ?page=peminjaman");
?>