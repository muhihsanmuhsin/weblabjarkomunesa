<?php
error_reporting(E_ALL^(E_NOTICE));
date_default_timezone_set("Asia/Jakarta");
session_start();
if (isset ($_GET['page'])){
	if ($_GET['keluar']=="1") $_SESSION['idm']=$_SESSION['pass']="";
	$page=$_GET['page'];

}else{

	$page="login";

}

switch($page){
	case "login";
		include "dbconf.php";
		include "headerl.php";
		include "module/login/login.php";
		include "footer.php";

		break;

	case "home";
		if(isset($_SESSION['idm'], $_SESSION['pass']))
		include "header.php";
		include "module/home/homepage.php";
		include "footer.php";
		
		break; 
		  
	case "dftar";
		include "headerdf.php";
		include "daftar.php";
		include "footer.php";

		break;

	case "datapinjam";
		if(isset($_SESSION['idm'], $_SESSION['pass']))
		include "dbconf.php";
		include "header.php";
		include "module/peminjaman/cekpinjam.php";
		include "footer.php";

		break;

	case "dltpem";
		include "module/admin/data/peminjaman/deletedata.php";

		break;

	case "peminjaman";
		if(isset($_SESSION['idm'], $_SESSION['pass']))
		include "dbconf.php";
		include "header.php";
		include "module/peminjaman/peminjaman.php";
		include "footer.php";
		
		break;
	
	case "pem-print";
		include "dbconf.php";
		include "module/peminjaman/printpem.php";

		break;
		
	case "kontak-kami";
		include "header.php";
		include "module/kontak/kontak.php";
		include "footer.php";
		
		break;
}

?>