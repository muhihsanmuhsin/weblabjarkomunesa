<div class="container">

<div class="bg-faded p-4 my-4">
<h2 class="text-center text-lg text-uppercase my-0">Edit barang <strong> pada menu berikut</strong> </h2>
<div align="center">
<?php

   // echo ($id);

     $sql = "SELECT * FROM gudang WHERE id= $id";
     $res = $con->query($sql);
     while ($row = $res->fetch_assoc()){
?>
<form action="?page=edt" method="post">
     <p>
       <input type="hidden" value="<?php echo $row['id'] ?>" name="id"/>
     </p>
     <p>&nbsp; </p>
     <table width="262" border="0">
       <tr>
         <td width="62">Nama</td>
         <td width="10">:</td>
         <td width="176"><input type="text" value="<?php echo $row['nama'] ?>" name="nm"/></td>
       </tr>
       <tr>
         <td>Tipe</td>
         <td>:</td>
         <td><input type="text" value="<?php echo $row['tipe'] ?>" name="tp"/></td>
       </tr>
       <tr>
         <td>Jumlah</td>
         <td>:</td>
         <td><input type="text" value="<?php echo $row['jumlah'] ?>" name="jml"/></td>
       </tr>
       <tr>
         <td>Baik</td>
         <td>:</td>
         <td><input type="text" value="<?php echo $row['baik'] ?>" name="bk"/></td>
       </tr>
       <tr>
         <td>Rusak</td>
         <td>:</td>
         <td><input type="text" value="<?php echo $row['rusak'] ?>" name="rs"/></td>
       </tr>
   </table>
     <p>&nbsp;</p>
<input type="submit" value="Update" name="bts"/>
</form>
     <? } ?>
</div>
</div>
</div>

<p>&nbsp;</p>
</div>