<div class="container">

<div class="bg-faded p-4 my-4">
<h2 class="text-center text-lg text-uppercase my-0">Edit User <strong> pada menu berikut</strong> </h2>
<div align="center">
<?php

   // echo ($id);

     $sql = "SELECT * FROM user WHERE id= $id";
     $res = $con->query($sql);
     while ($row = $res->fetch_assoc()){
?>
<form action="?page=edtuser" method="post">
     <p>
       <input type="hidden" value="<?php echo $row['id'] ?>" name="id"/>
     </p>
     <p>&nbsp;</p>
     <table width="550" border="0">
       <tr>
         <td width="276">Nama</td>
         <td width="10">:</td>
         <td width="257"><input name="nm" type="text" value="<?php echo $row['nama'] ?>" size="40"/></td>
       </tr>
       <tr>
         <td>No Induk</td>
         <td>:</td>
         <td><input name="ni" type="text" value="<?php echo $row['nim'] ?>" size="40"/></td>
       </tr>
       <tr>
         <td>Tipe</td>
         <td>:</td>
         <td><input name="tp" type="text" value="<?php echo $row['tipe'] ?>" size="40"/></td>
       </tr>
       <tr>
         <td>Email</td>
         <td>:</td>
         <td><input name="em" type="text" value="<?php echo $row['email'] ?>" size="40"/></td>
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
         <td>Alamat Tinggal</td>
         <td>:</td>
         <td><textarea name="ati" cols="40" rows="5"><?php echo $row['almting'] ?></textarea></td>
       </tr>
       <tr>
         <td>Alamat Asal</td>
         <td>:</td>
         <td><textarea name="asl" cols="40" rows="5"><?php echo $row['almasal'] ?></textarea></td>
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