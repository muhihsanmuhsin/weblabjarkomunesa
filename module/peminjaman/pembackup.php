<style type="text/css">
.textbox {
	width: 70%;
}
.textbox1 {
	width: 50%;
}
.textbox2 {
	width: 30%;
}
.fpad{
	padding-left: 15%;
}
.fpad1{
	padding-left: 27%;
}

</style>
  <? 
  include ("dbconf.php");
    if (isset($_POST['simpan'])) {
		 //print_r ($_POST) ;
	 $sql="INSERT INTO peminjaman (id, nama, nim, tipe, prodi, nohp, tglpin, tglkem, almting, almasal, barang1, barang2, barang3, barang4, barang5) 
	 VALUES ('', '$_POST[tnama]', '$_POST[tinduk]', '$_POST[initipe]', '$_POST[tprodi]', '$_POST[tnohp]', '$_POST[temail]', '$_POST[ttglawal]', '$_POST[ttglkem]', '$_POST[talamatting]', '$_POST[alamatskr]', '$_POST[tpil1]', '$_POST[tpil2]', '$_POST[tpil3]', '$_POST[tpil4]', '$_POST[tpil5]');";
	$res=mysqli_query($con,$sql);
	};
  ?>
<sec>
<div class="container">
  <div class="bg-faded p-4 my-4">
<h2 align="center"><strong>Alat yang sekarang berada pada gudang : </strong></h2>
	<div align="center">
      <table width="581" border="1">
        <tr>
          <td width="252"><div align="center">Nama</div></td>
          <td width="150"><div align="center">Tipe</div></td>
          <td width="84"><div align="center">Jumlah</div></td>
          <td width="120"><div align="center">Kondisi Baik</div></td>
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
</div>
<div class="container">
  <div class="bg-faded p-4 my-4">
    <!-- Welcome Message -->
    <div class=" mt-4">
      <h2 align="center"><strong>Silahkan lengkapi Form Peminjaman berikut :</strong></h2>
    	<p>&nbsp;</p>
			<?php
			$induk = $_SESSION['pass'];
			$queri2="Select * From user Where nim =$induk" ;  //menampikan SEMUA data dari tabel siswa
			$hasil=$con->query ($queri2);    //fungsi untuk SQL
			while ($row = $hasil->fetch_assoc()){
			?>
   	  <form action="?page=peminjaman" method="post" class="fpad">
    	  <table width="653" border="0">
    	    <tr>
    	      <td width="259"></td>
    	      <td width="10"></td>
    	      <td width="377"><input name="tnama" type="hidden" value="<?php echo $row['nama'] ?>" id="tnama" class="textbox"/></td>
  	      </tr>
    	    <tr>
    	      <td></td>
    	      <td></td>
    	      <td><input name="tinduk" type="hidden" value="<?php echo $row['nim'] ?>" id="tinduk" class="textbox"/></td>
  	      </tr>
    	    <tr>
    	      <td></td>
    	      <td></td>
    	      <td><input type="hidden" name="tprodi" value="<?php echo $row['prodi'] ?>"  id="tprodi" class="textbox"/></td>
  	      </tr>
			<tr>
    	      <td></td>
    	      <td></td>
    	      <td><input type="hidden" name="initipe" value="<?php echo $row['tipe'] ?>"  id="initipe" class="textbox"/></td>
  	      </tr>
    	    <tr>
    	      <td></td>
    	      <td></td>
    	      <td><input name="tnohp" type="hidden" value="<?php echo $row['nohp'] ?>"  id="tnohp" value="" class="textbox" /></td>
  	      </tr>
    	    <tr>
    	      <td></td>
    	      <td></td>
    	      <td><input type="hidden" name="temail" value="<?php echo $row['email'] ?>" id="temail" class="textbox"/></td>
  	      </tr>
    	    <tr>
    	      <td>Tanggal Pinjam</td>
    	      <td>:</td>
    	      <td><input name="ttglawal" type="text" readonly="readonly" id="ttglawal" value="<?php echo date('Y / m / d H:i:s') ?>" class="textbox"/></td>
  	      </tr>
    	    <tr>
    	      <td>Perkiraan Tanggal Pengembalian</td>
    	      <td>:</td>
    	      <td>
    	            <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
    	              <input class="form-control" type="text" name="ttglkem" readonly="readonly" id="ttglkem" />
    	              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> </div>
  	      </tr></td>
    	    <tr>
    	      <td valign="top"></td>
    	      <td valign="top"></td>
    	      <td><textarea style="display:none;" name="talamatting" id="talamatting" cols="60" rows="3" class="textbox"><?php echo $row['almting'] ?></textarea></td>
  	      </tr>
    	    <tr>
    	      <td valign="top"></td>
    	      <td valign="top"></td>
    	      <td><textarea style="display:none;" name="alamatskr" cols="60" rows="3" class="textbox" id="alamatskr"><?php echo $row['almasal'] ?></textarea></td>
  	      </tr>
  	    </table>
<p>&nbsp;</p>
        <div class="fpad">
   	    <p>
   	      Barang ke 1 
		<?
		echo "<select name='tpil1'>"; ?> <option value="">-- pilih --</option> <?
	$queri="select * from gudang"; $hasil=$con->query ($queri);
	while ($data = $hasil->fetch_array()){ ?>
 <option value="<?=$data['nama']?>"><?=$data['nama']?></option>
		<? }
	echo "</select>";
		?>
   	    </p>
   	    <p>
   	      Barang ke 2 
		<?
		echo "<select name='tpil2'>"; ?> <option value="">-- pilih --</option> <?
	$queri="select * from gudang"; $hasil=$con->query ($queri);
	while ($data = $hasil->fetch_array()){ ?>
 <option value="<?=$data['nama']?>"><?=$data['nama']?></option>
		<? }
	echo "</select>";
		?>
   	    </p>
   	    <p>
   	      Barang ke 3 
		<?
		echo "<select name='tpil3'>"; ?> <option value="">-- pilih --</option> <?
	$queri="select * from gudang"; $hasil=$con->query ($queri);
	while ($data = $hasil->fetch_array()){ ?>
 <option value="<?=$data['nama']?>"><?=$data['nama']?></option>
		<? }
	echo "</select>";
		?>
   	    </p>
   	    <p>
   	      Barang ke 4 
		<?
		echo "<select name='tpil4'>"; ?> <option value="">-- pilih --</option> <?
	$queri="select * from gudang"; $hasil=$con->query ($queri);
	while ($data = $hasil->fetch_array()){ ?>
 <option value="<?=$data['nama']?>"><?=$data['nama']?></option>
		<? }
	echo "</select>";
		?>
   	    </p>
   	    <p>
   	      Barang ke 5 
		<?
		echo "<select name='tpil5'>"; ?> <option value="">-- pilih --</option> <?
	$queri="select * from gudang"; $hasil=$con->query ($queri);
	while ($data = $hasil->fetch_array()){ ?>
 <option value="<?=$data['nama']?>"><?=$data['nama']?></option>
		<? }
	echo "</select>";
		?>
   	    </p>
        </div>
   	    <div class="fpad1">
   	      <input name="simpan" type="submit"  id="simpan" value="Simpan Data dan Print" />
          <input type="button" name="button" value="Batal" onClick="window.location='?page=home'" />
   	    </div>
   	  </form>

	<? } ?>

    </div>
  </div>
</div>
<p>&nbsp;</p>

<script>
    $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
</script>