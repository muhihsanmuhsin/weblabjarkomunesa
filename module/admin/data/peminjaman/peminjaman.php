<div class="container">
<div class="bg-faded p-4 my-4">
<p>&nbsp;</p>
    <h2 class="text-center text-uppercase my-0">Data Peminjam <strong>Update Tabel</strong> </h2>
    <p>&nbsp;</p>
	<div align="center">
      <table width="657" border="1">
        <tr>
          <td width="93"><div align="center">Nama</div></td>
          <td width="111"><div align="center">No Induk</div></td>
          <td width="116"><div align="center">Nomor HP</div></td>
          <td width="127"><div align="center">Barang 1</div></td>
          <td width="127"><div align="center">Barang 2</div></td>
        </tr>
        <?php  
			// Perintah untuk menampilkan data
			$queri="Select * From peminjaman" ;  //menampikan SEMUA data dari tabel siswa

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
			  <td><center>".$data['barang1']."</center></td>
			  <td><center>".$data['barang2']."</center></td>
			  </tr> 
			  ";
			 $i++; 
			}

		?>
  </table>
    </div>  
</div>
<div class="bg-faded p-4 my-4">

	<h2 class="text-center text-lg text-uppercase my-0">Edit dan Hapus transaksi peminjaman <strong>pada menu berikut</strong> </h2>
<div align="center">
<p>&nbsp;</p>
<form action="editpem.php" method="post">
   <table width="657" border="1">
    <tr>
          <td width="116"><div align="center">Nama</div></td>
          <td width="147"><div align="center">No Induk</div></td>
          <td width="114"><div align="center">Nomor HP</div></td>
          <td width="106"><div align="center">Sudah kembali</div></td>
          <td width="140"><div align="center">Menu</div></td>
    </tr>
	<?
		$res = $con->query("SELECT * FROM peminjaman");
		while ($row = $res->fetch_assoc()):
	?>
     <tr>
          <td align="center"><?php echo $row['nama'] ?></td>
          <td align="center"><?php echo $row['nim'] ?></td>
          <td align="center"><?php echo $row['nohp'] ?></td>
          <td align="center"><?php echo $row['cekkembali'] ?></td>
          <td align="center">
          <a class="btn" name="btnedit" href="?page=editpem&id=<?php echo $row['id'] ?>">Edit</a>
          <a class="btn" name="btndel" href="?page=dltpem&id=<?php echo $row['id'] ?>">Delete</a>
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
