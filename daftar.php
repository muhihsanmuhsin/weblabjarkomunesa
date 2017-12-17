<style type="text/css">
.textbox {
	width: 70%;
}
.fpad{
	padding-left: 5%;
}
 .pesan{
    display: none;
    position: fixed;
    border: 3px;
    //top: 50%;
	z-index:2;
	left: 20%;
    padding: 5% 5%;
	color:#155724;background-color:#d4edda;border-color:#c3e6cb
    text-align: center;
            }

</style>

  <? 
  include ("dbconf.php");
    if (isset($_POST['simpan'])) {
	$_SESSION['pesan'] = 'Daftar Berhasil! <a href="?page=login" class="alert-link">KLIK DISINI</a> untuk Kembali';
		// print_r ($_POST) ;
	 $sql="INSERT INTO user(id, nama, nim, email, prodi, tipe, nohp, almting, almasal) VALUES ('','$_POST[tnama]','$_POST[tinduk]','$_POST[temail]','$_POST[tprodi]','$_POST[ttipe]','$_POST[tnohp]','$_POST[talamatting]','$_POST[talamatskr]');";
	$res=mysqli_query($con,$sql);
	};
  ?>

<sec>
	<div class="container">
  <div class="bg-faded p-4 my-4">
             <?php 
    //        menampilkan pesan jika ada pesan
            if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                echo '<div class="pesan">'.$_SESSION['pesan'].'</div>';
            }

    //        mengatur session pesan menjadi kosong
            $_SESSION['pesan'] = '';
            ?>
    <div class="formS">
    <!-- Welcome Message -->
    <div class=" mt-4">
      <h2 align="center"><strong>Silahkan lengkapi form pendaftaran berikut :</strong></h2>
    	<p>&nbsp;</p>
   	  <form action="?page=dftar" method="post" class="fpad">
    	  <table width="585" height="286" border="0" align="center">
    	    <tr>
    	      <td width="126">Nama</td>
    	      <td width="17">:</td>
    	      <td width="428"><input type="text" name="tnama" id="tnama" required/></td>
  	      </tr>
    	    <tr>
    	      <td>Anda</td>
    	      <td>:</td>
    	      <td>
    	        <select name="ttipe" id="ttipe">
    	          <option>--- Pilih ----</option>
    	          <option value="Dosen">Dosen</option>
    	          <option value="Mahasiswa">Mahasiswa</option>
              </select></td>
  	      </tr>
    	    <tr>
    	      <td>Nomor Induk</td>
    	      <td>:</td>
    	      <td><input type="text" name="tinduk" id="tinduk" required/></td>
  	      </tr>
    	    <tr>
    	      <td>Program Studi</td>
    	      <td>:</td>
    	      <td><select name="tprodi" id="tprodi">
    	        <option>---Pilih---</option>
    	        <option value="Pendidikan Teknologi Informasi">Pendidikan Teknologi Informasi</option>
    	        <option value="Teknik Informatika">Teknik Informatika</option>
    	        <option value="Sistem Informasi">Sistem Informasi</option>
    	        <option value="Manajemen Informatika">Manajemen Informatika</option>
  	        </select></td>
  	      </tr>
    	    <tr>
    	      <td>No HP</td>
    	      <td>:</td>
    	      <td><input name="tnohp" type="text" id="tnohp" value="" required/></td>
  	      </tr>
    	    <tr>
    	      <td>Email</td>
    	      <td>:</td>
    	      <td><input type="text" name="temail" id="temail" required/></td>
  	      </tr>
    	    <tr>
    	      <td valign="top">Alamat tinggal</td>
    	      <td valign="top">:</td>
    	      <td><textarea name="talamatting" id="talamatting" cols="45" rows="3" class="textbox"></textarea></td>
  	      </tr>
    	    <tr>
    	      <td valign="top">Alamat asal</td>
    	      <td valign="top">:</td>
    	      <td><textarea name="talamatskr" cols="45" rows="3" class="textbox" id="talamatskr"></textarea></td>
  	      </tr>
        </table>
   	    <div align="center">
        
		<p>&nbsp;</p>
		  <h3>INGAT!</h3>
		<h3><strong>No Induk akan digunakan sebagai Password dan Email sebagai ID</strong></h3>
		</div>
		<p>&nbsp;</p>
   	    <div align="center">
    	    <input name="simpan" type="submit"  id="simpan" value="Simpan Data" />
          <input type="button" name="button" value="Batal" onClick="window.location='./'" />
   	    </div>
   	  </form>
      </div>
    </div>
  </div>
</div>
<p>&nbsp;</p>
        <script>
$(document).ready(function(){setTimeout(function(){$(".pesan").fadeIn('slow');}, 1000);});
setTimeout(function(){$(".pesan").fadeOut('slow');}, 10000);
        </script>