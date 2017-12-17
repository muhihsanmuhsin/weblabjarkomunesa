<?php
include_once 'dbconf.php';
$id = $_POST['id'];
$nm = $_POST['nm'];
$tp = $_POST['tp'];
$jml = $_POST['jml'];
$bk = $_POST['bk'];
$rs = $_POST['rs'];

	$con->query("UPDATE gudang SET nama='$nm', tipe='$tp', jumlah='$jml', baik='$bk',rusak='$rs' WHERE id=".$id);

header("Location: ?page=baru");
?>