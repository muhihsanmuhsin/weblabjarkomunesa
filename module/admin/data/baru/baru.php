<div class="container">

<div class="bg-faded p-4 my-4">
<p>&nbsp;</p>
    <h2 class="text-center text-uppercase my-0">Gudang Lab Jarkom <strong>Update Tabel</strong> </h2>
    <p>&nbsp;</p>
	<div align="center">
      <table width="637" border="1">
        <tr>
          <td width="186"><div align="center">Nama</div></td>
          <td width="187"><div align="center">Tipe</div></td>
          <td width="113"><div align="center">Jumlah</div></td>
          <td width="123"><div align="center">Kondisi Baik</div></td>
        </tr>
        <?php  
			// Perintah untuk menampilkan data
			$queri="Select * From gudang" ;  //menampikan SEMUA data dari tabel siswa
			
			$hasil=$con->query ($queri);    //fungsi untuk SQL
			
			// nilai awal variabel untuk no urut
			$i = 1;
			
			// perintah untuk membaca dan mengambil data dalam bentuk array
			while ($data = $hasil->fetch_array()){
			$id = $data['id'];
			 echo "  
			  <tr>
			  <td>".$data['nama']."</td>
			  <td><center>".$data['tipe']."</center></td>
			  <td><center>".$data['jumlah']."</center></td>
			  <td><center>".$data['baik']."</center></td>
			  
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
<h2 class="text-center text-lg text-uppercase my-0">tambah barang <strong>pada menu berikut</strong> </h2>
<p>&nbsp;</p>
  <? 
    if (isset($_POST['tambah'])) {
		// print_r ($_POST) ;
	 $sql="INSERT INTO gudang(id, nama, tipe, jumlah, baik, rusak) VALUES ('', '$_POST[fnama]', '$_POST[ftipe]', '$_POST[jmltot]', '$_POST[fjmlbaik]', '$_POST[jmlrusak]');";
	 //echo $sql;
	$res=mysqli_query($con,$sql);
	};
  ?>
<form action="?page=baru" method="post" >
<table width="534" border="0">
  <tr>
    <td width="126">Nama</td>
    <td width="29">:</td>
    <td width="365"><input type="text" name="fnama" id="fnama" class="textbox" required/></td>
  </tr>
  <tr>
    <td>Tipe</td>
    <td>:</td>
    <td><input type="text" name="ftipe" id="textfield" class="textbox" required/></td>
  </tr>
  <tr>
    <td>Jumlah Baik</td>
    <td>:</td>
    <td><input type="text" name="fjmlbaik" id="fjmlbaik" class="textbox" required/></td>
  </tr>
  <tr>
    <td>Jumlah Rusak</td>
    <td>:</td>
    <td>
      <input type="text" name="jmlrusak" id="jmlrusak" class="textbox" required/></td>
  </tr>
  <tr>
    <td>Jumlah Total</td>
    <td>:</td>
    <td>
      <input type="text" name="jmltot" id="jmltot" class="textbox" required/></td>
  </tr>
</table>
<p>&nbsp;</p>
<button type="submit" name="tambah" id="tambah" class="btn btn-danger">Tambah Barang Baru</button>
<p>&nbsp;</p>
</form>
</div>
</div>

<div class="bg-faded p-4 my-4">

	<h2 class="text-center text-lg text-uppercase my-0">Edit dan hapus barang <strong>pada menu berikut</strong> </h2>
<div align="center">
<p>&nbsp;</p>
	<form method="post">
  <table width="676" height="26" border="5" align="center">
    <tr>
      <td align="center" width="104">Nama</td>
      <td align="center" width="114">Tipe</td>
      <td align="center" width="111">Jumlah Total</td>
      <td  align="center" width="169">Menu</td>
    </tr>
	<?
		$res = $con->query("SELECT * FROM gudang");
		while ($row = $res->fetch_assoc()):
	?>
     <tr>
          <td align="center"><?php echo $row['nama'] ?></td>
          <td align="center"><?php echo $row['tipe'] ?></td>
          <td align="center"><?php echo $row['jumlah'] ?></td>
          <td align="center">
          <a class="btn" name="btnedit" href="?page=editbrg&id=<? echo $row['id']?>">Edit</a>
          <a class="btn" name="btndel" href="?page=dltbrg&id=<? echo $row['id'] ?>">Delete</a>
          </td>
     </tr>
<?php
endwhile;
?>
  </table>
  </form>
  <p>&nbsp;</p>
</div>
</div>
</div>

<p>&nbsp;</p>
