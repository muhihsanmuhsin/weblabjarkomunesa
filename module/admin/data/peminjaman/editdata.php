<div class="container">

<div class="bg-faded p-4 my-4">
<h2 class="text-center text-lg text-uppercase my-0">Edit Peminjaman <strong> pada menu berikut</strong> </h2>
<div align="center">
<p>
  <?php
 
   // echo ($id);

     $sql = "SELECT * FROM peminjaman WHERE id= $id";
     $res = $con->query($sql);
     while ($row = $res->fetch_assoc()){
?>
</p>
<form action="?page=edtpem" method="post">
     <p>
       <input type="hidden" value="<?php echo $row['id'] ?>" name="id"/>
     </p>
     <table width="563" border="0">
       <tr>
         <td width="306">Kembali?</td>
         <td width="10">&nbsp;</td>
         <td width="240"><input name="cek" type="text" value="<?php echo $row['cekkembali'] ?>" size="10"/></td>
       </tr>
       <tr>
         <td>Nama</td>
         <td>:</td>
         <td><input name="nm" type="text" value="<?php echo $row['nama'] ?>" size="40"/></td>
       </tr>
       <tr>
         <td>No Induk</td>
         <td>:</td>
         <td><input name="ni" type="text" value="<?php echo $row['nim'] ?>" size="40"/></td>
       </tr>
       <tr>
         <td>Barang 1</td>
         <td>:</td>
         <td><input name="b1" type="text" value="<?php echo $row['barang1'] ?>" size="40"/></td>
       </tr>
       <tr>
         <td>Barang 2</td>
         <td>:</td>
         <td><input name="b2" type="text" value="<?php echo $row['barang2'] ?>" size="40"/></td>
       </tr>
       <tr>
         <td>Barang 3</td>
         <td>:</td>
         <td><input name="b3" type="text" value="<?php echo $row['barang3'] ?>" size="40"/></td>
       </tr>
       <tr>
         <td>Barang 4</td>
         <td>:</td>
         <td><input name="b4" type="text" value="<?php echo $row['barang4'] ?>" size="40"/></td>
       </tr>
       <tr>
         <td>Barang 5</td>
         <td>:</td>
         <td><input name="b5" type="text" value="<?php echo $row['barang5'] ?>" size="40"/></td>
       </tr>
       <tr>
         <td>Tipe</td>
         <td>:</td>
         <td><input type="text" value="<?php echo $row['tipe'] ?>" name="tp"/></td>
       </tr>
       <tr>
         <td>Prodi</td>
         <td>:</td>
         <td><input name="pr" type="text" value="<?php echo $row['prodi'] ?>" size="40"/></td>
       </tr>
       <tr>
         <td>No HP</td>
         <td>:</td>
         <td><input name="hp" type="text" value="<?php echo $row['nohp'] ?>" size="40"/></td>
       </tr>
       <tr>
         <td>Tanggal Pinjam</td>
         <td>:</td>
         <td><input name="pin" type="text" value="<?php echo $row['tglpin'] ?>" size="40"/></td>
       </tr>
       <tr>
         <td>Tanggal Kembali</td>
         <td>:</td>
         <td><input name="kem" type="text" value="<?php echo $row['tglkem'] ?>" size="40"/></td>
       </tr>
       <tr>
         <td>Alamat Tinggal</td>
         <td>:</td>
         <td><input name="ati" type="text" value="<?php echo $row['almting'] ?>" size="40"/></td>
       </tr>
       <tr>
         <td>Alamat Asal</td>
         <td>:</td>
         <td><input name="asl" type="text" value="<?php echo $row['almasal'] ?>" size="40"/></td>
       </tr>
   </table>
     <p>&nbsp;</p>
     <p>
       <input type="submit" value="Update" name="bts"/>
</p>
</form>
     <? } ?>
</div>
</div>
</div>

<p>&nbsp;</p>
</div>