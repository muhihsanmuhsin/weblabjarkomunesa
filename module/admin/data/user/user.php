<div class="container">

<div class="bg-faded p-4 my-4">
<p>&nbsp;</p>
    <h2 class="text-center text-uppercase my-0">User Yang Terdaftar <strong>Update Tabel</strong> </h2>
    <p>&nbsp;</p>
	<div align="center">
      <table width="839" border="1">
        <tr>
          <td width="252"><div align="center">Nama</div></td>
          <td width="174"><div align="center">No Induk</div></td>
          <td width="152"><div align="center">No HP</div></td>
          <td width="233"><div align="center">Email</div></td>
        </tr>
        <?php  
			// Perintah untuk menampilkan data
			$queri="Select * From user" ;  //menampikan SEMUA data dari tabel siswa
			
			$hasil=$con->query ($queri);    //fungsi untuk SQL
			
			// nilai awal variabel untuk no urut
			$i = 1;
			
			// perintah untuk membaca dan mengambil data dalam bentuk array
			while ($data = $hasil->fetch_array()){
			$id = $data['id'];
			 echo "  
			  <tr>
			  <td>".$data['nama']."</td>
			  <td><center>".$data['nim']."</center></td>
			  <td><center>".$data['nohp']."</center></td>
			  <td><center>".$data['email']."</center></td>
			  
			  </tr> 
			  ";
			 $i++; 
			}
			
			?>
  </table>
    </div>  
</div>

<div class="bg-faded p-4 my-4">
<div align="center">
<h2 class="text-center text-lg text-uppercase my-0">tambah user <strong>pada menu berikut</strong> </h2>
<p>&nbsp;</p>
  <? 
    if (isset($_POST['tambah2'])) {
		// print_r ($_POST) ;
	 $sql="INSERT INTO user(id, nama, nim, email, prodi, tipe, nohp, almting, almasal) VALUES ('', '$_POST[unama]', '$_POST[uinduk]', '$_POST[uemail]', '$_POST[uprodi]', '$_POST[utipe]', '$_POST[unohp]', '$_POST[ualmting]', '$_POST[ualmasal]');";
	 //echo $sql;
	$res=mysqli_query($con,$sql);
	};
  ?>
<form action="?page=user" method="post">
<table width="629" border="0">
  <tr>
    <td width="174">Nama</td>
    <td width="24">:</td>
    <td width="417">
      <input type="text" name="unama" id="unama" class="textbox" required/></td>
  </tr>
  <tr>
    <td>No Induk</td>
    <td>:</td>
    <td>
      <input type="text" name="uinduk" id="uinduk" class="textbox" required/></td>
  </tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td>
      <input type="text" name="uemail" id="uemail" class="textbox" required/></td>
  </tr>
  <tr>
    <td>Prodi</td>
    <td>:</td>
    <td><select name="uprodi" id="uprodi">
      <option>---Pilih---</option>
      <option value="Pendidikan Teknologi Informasi">Pendidikan Teknologi Informasi</option>
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Sistem Informasi">Sistem Informasi</option>
      <option value="Manajemen Informatika">Manajemen Informatika</option>
    </select></td>
  </tr>
  <tr>
    <td>Tipe</td>
    <td>:</td>
    <td><select name="utipe" id="utipe">
      <option>--- Pilih ----</option>
      <option value="Dosen">Dosen</option>
      <option value="Mahasiswa">Mahasiswa</option>
    </select></td>
  </tr>
  <tr>
    <td>No HP</td>
    <td>:</td>
    <td>
      <input type="text" name="unohp" id="unohp" class="textbox" required/></td>
  </tr>
  <tr>
    <td valign="top">Alamat Tinggal</td>
    <td valign="top">:</td>
    <td>
      <textarea name="ualmting" id="ualmting" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td valign="top">Alamat Asal</td>
    <td valign="top">:</td>
    <td>
      <textarea name="ualmasal" id="ualmasal" cols="45" rows="5"></textarea></td>
  </tr>
</table>
<p>&nbsp;</p>
<button type="submit" id="tambah2" name="tambah2" class="btn btn-danger">Tambah User Baru</button>
</form>
<p>&nbsp;</p>
</div>
</div>

<div class="bg-faded p-4 my-4">

	<h2 class="text-center text-lg text-uppercase my-0">Edit dan hapus user <strong>pada menu berikut</strong> </h2>
<div align="center">
<p>&nbsp;</p>
<form method="post">
<table width="839" border="1">
<tr>
  <td width="252"><div align="center">Nama</div></td>
  <td width="174"><div align="center">No Induk</div></td>
  <td width="152"><div align="center">Email</div></td>
  <td width="233"><div align="center">Menu</div></td>
</tr>
<?
  $res = $con->query("SELECT * FROM user");
  while ($row = $res->fetch_assoc()):
?>
   <tr>
        <td align="center"><?php echo $row['nama'] ?></td>
        <td align="center"><?php echo $row['nim'] ?></td>
        <td align="center"><?php echo $row['email'] ?></td>
        <td align="center">
        <a class="btn" name="btnedit" href="?page=edituser&id=<?php echo $row['id'] ?>">Edit</a>
        <a class="btn" name="btndel" href="?page=dltuser&id=<?php echo $row['id'] ?>">Delete</a>
        </td>
   </tr>
<?php
endwhile;
?>
</table>
</form>
</div>
</div>
</div>

<p>&nbsp;</p>
