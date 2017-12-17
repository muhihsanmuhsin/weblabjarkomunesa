<?php
error_reporting(E_ALL^(E_NOTICE));
date_default_timezone_set("Asia/Jakarta");
if (isset ($_GET['page'])){
	$page=$_GET['page'];

}else{

	$page="login";

}

switch($page){
	case "login";
		include "login.php";

		break;

	case "home";
		include "header.php";
		include "loginserv.php";
		include "homepage.php";
		include "footer.php";
		
		break;
		
	case "baru";
		include "loginserv.php";
		include "header.php";
		include "data/baru/baru.php";
		include "footer.php";
		
		break;
		
	case "editbrg";
		include "loginserv.php";	
		include "headeredit.php";
		include "data/baru/editdata.php";
		include "footeredit.php";
		
		break;
	
	case "dltbrg";
		include "data/baru/deletedata.php";
		break;

	case "edt";
		include "data/baru/edit-brg.php";
		break;
		
	case "peminjaman";
		include "loginserv.php";
		include "header.php";
		include "data/peminjaman/peminjaman.php";
		include "footer.php";
		
		break;

	case "editpem";
		include "loginserv.php";	
		include "headeredit.php";
		include "data/peminjaman/editdata.php";
		include "footeredit.php";
		
		break;
	
	case "edtpem";
		include "data/peminjaman/edit-pem.php";
		break;

	case "dltpem";
		include "data/peminjaman/deletedata.php";

		break;
		
	case "user";
		include "loginserv.php";
		include "header.php";
		include "data/user/user.php";
		include "footer.php";
		
		break;

	case "edituser";
		include "loginserv.php";	
		include "headeredit.php";
		include "data/user/editdata.php";
		include "footeredit.php";
		break;
	
	case "edtuser";
		include "data/user/edit-user.php";
		break;
	
	case "dltuser";
		include "data/user/deletedata.php";

		break;
	
	case "kontak-kami";
		include "header.php";
		include "../kontak/kontak.php";
		include "footer.php";
		
		break;
}

?>