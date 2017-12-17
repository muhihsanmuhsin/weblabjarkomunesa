<?php
     $id = $_GET['id'];
     $sql = "SELECT * FROM peminjaman WHERE id= $id";
     $res = $con->query($sql);
     while ($row = $res->fetch_assoc()){
?>
<head>
<title>Print Pinjam SILAB-J <?php echo $row['nama']," ", $id; ?> </title>
</head>
<h2 align="center"><strong>Form Peminjaman</strong></h2>
<h3 align="center"><strong>Laboratorium Jaringan Komputer | Universitas Negeri Surabaya</strong></h3>
<div align="center">
<table width="710" border="0"> 
  <tr>
    <td width="704">Kepada : Yth. Kepala Sub Laboratorium Jaringan Komputer</td>
  </tr>
  <tr>
    <td>. . . . . . . .Jurusan Teknik Informatika</td>
  </tr>
  <tr>
    <td>. . . . . . . .Fakultas Teknik Universitas Negeri Surabaya</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Yang Bertanda Tangan Dibawah Ini :</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
     <p>
       <input type="hidden" value="<?php echo $row['id'] ?>" name="id"/>
     </p>
</div>
<div align="center">
  <table width="406" border="0">
  <tr>
    <td width="119">Nama</td>
    <td width="10">:</td>
    <td width="268"><?php echo $row['nama'] ?></td>
  </tr>
  <tr>
    <td>No Induk</td>
    <td>:</td>
    <td><?php echo $row['nim'] ?></td>
  </tr>
  <tr>
    <td>Anda</td>
    <td>:</td>
    <td><?php echo $row['tipe'] ?></td>
  </tr>
  <tr>
    <td>Prodi</td>
    <td>:</td>
    <td><?php echo $row['prodi'] ?></td>
  </tr>
  <tr>
    <td>No HP</td>
    <td>:</td>
    <td><?php echo $row['nohp'] ?></td>
  </tr>
  <tr>
    <td>Tanggal Pinjam</td>
    <td>:</td>
    <td><?php echo $row['tglpin'] ?></td>
  </tr>
  <tr>
    <td>Tanggal Kembali</td>
    <td>:</td>
    <td><?php echo $row['tglkem'] ?></td>
  </tr>
  <tr>
    <td>Barang 1</td>
    <td>:</td>
    <td><?php echo $row['barang1'] ?></td>
  </tr>
  <tr>
    <td>Barang 2</td>
    <td>:</td>
    <td><?php echo $row['barang2'] ?></td>
  </tr>
  <tr>
    <td>Barang 3</td>
    <td>:</td>
    <td><?php echo $row['barang3'] ?></td>
  </tr>
  <tr>
    <td>Barang 4</td>
    <td>:</td>
    <td><?php echo $row['barang4'] ?></td>
  </tr>
  <tr>
    <td>Barang 5</td>
    <td>:</td>
    <td><?php echo $row['barang5'] ?></td>
  </tr>
</table>
  <p>&nbsp;</p>
  <table width="710" border="0">
    <tr>
      <td colspan="2">Mengajukan Permohonan Peminjaman alat / bahan Laboratorium untuk keperluan . . . . . . . . . . . . . . . . . . . . .</td>
    </tr>
    <tr>
      <td colspan="2"> . . . . . . . . . . . . . . . . Dengan Ini alat yang telah di tuliskan diatas.</td>
    </tr>
    <tr>
      <td colspan="2">Saya Bersedia Memperbaiki atau mengganti alat alat diatas jika terjadi kerusakan maupun kehilangan.</td>
    </tr>
    <tr>
      <td width="704">&nbsp;</td>
      <td width="704">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="right"></div></td>
      <td><div align="center">Surabaya, <?php echo date('Y / M / d H:i:s') ?> </div></td>
    </tr>
    <tr>
      <td><div align="center">Kepala Sub Laboratorium Jaringan Komputer        </div></td>
      <td><div align="center">Pemohon  </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">I Made Suartana, S.Kom, M.Kom,.</div></td>
      <td><div align="center"><?php echo $row['nama'] ?></div></td>
    </tr>
    <tr>
      <td><div align="center">198411242015041003</div></td>
      <td><div align="center"><?php echo $row['nim'] ?></div></td>
    </tr>
  </table>
</div>
     <?php } ?>