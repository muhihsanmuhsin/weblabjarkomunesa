<div class="container">
<div class="bg-faded p-4 my-4">
	<h2 class="text-center text-lg text-uppercase my-0">Data Pinjam Anda <strong><?echo "".$_SESSION[idm] ; ?> </strong> </h2>
  <? $idk = $_SESSION['pass'];?>
<div align="center">
<p>&nbsp;</p>
<form action="" method="post">
   <table width="657" border="1">
    <tr>
          <td width="116"><div align="center">Tanggal Pinjam</div></td>
          <td width="147"><div align="center">Barang 1</div></td>
          <td width="114"><div align="center">Barang 2</div></td>
          <td width="106"><div align="center">Barang 3</div></td>
          <td width="140"><div align="center">Menu</div></td>
    </tr>
	<?
    $sql = "SELECT * FROM peminjaman WHERE nim= $idk";
    $res = $con->query($sql);
    while ($row = $res->fetch_assoc()){
	?> 
     <tr>
          <td align="center"><?php echo $row['tglpin'] ?></td>
          <td align="center"><?php echo $row['barang1'] ?></td>
          <td align="center"><?php echo $row['barang2'] ?></td>
          <td align="center"><?php echo $row['barang3'] ?></td>
          <td align="center">
          <a class="btn" name="btnedit" href="?page=pem-print&id=<?php echo $row['id'] ?>">Print</a>
          <a class="btn" name="btndel" href="?page=dltpem&id=<?php echo $row['id'] ?>">Delete</a>
          </td>
     </tr>
<?php
    }
?>
  </table>
  </form>
</div>
</div>
</div>

<p>&nbsp;</p>