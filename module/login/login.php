<sec>
<div class="container">
  <div class="bg-faded p-4 my-4">
    <!-- Image Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="img/slide-1.jpg" alt="" />
          <div class="carousel-caption d-none d-md-block">
            <h3 class="text-shadow">Kelas Teknik Informatika</h3>
            <p class="text-shadow">Tampak halaman depan gedung kelas Teknik Informatika</p>
          </div>
        </div>
        <div class="carousel-item"> <img class="d-block img-fluid w-100" src="img/slide-2.jpg" alt="" />
          <div class="carousel-caption d-none d-md-block">
            <h3 class="text-shadow">C Informatics Championship 2016</h3>
            <p class="text-shadow">Segenap anggota staff dan penyempurna acara CIC 2016.</p>
          </div>
        </div>
        <div class="carousel-item"> <img class="d-block img-fluid w-100" src="img/slide-3.jpg" alt="" />
          <div class="carousel-caption d-none d-md-block">
            <h3 class="text-shadow">C Informatics Championship 2016</h3>
            <p class="text-shadow">Segenap Dosen penanggung jawab pada acara CIC 2016.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    <!-- Welcome Message -->
    <div class="text-center mt-4">
		<form action="" method="post" style="text-align:center">
		<input type="text" placeholder="Username" id="user" name="user" required><br/><br/>
		<input type="password" placeholder="Password" id="pass" name="pass" required><br/><br/>
		<input type="submit" value="Login" name="submit">
		<!-- Error Message -->
		<h5><?php echo $error; ?></h5>
		<a type="button" class="btn btn-warning" href="?page=dftar">Belum Daftar?</a>
    </div>
  </div>
  <div class="bg-faded p-4 my-4">
    <hr class="divider" />
    <h2 class="text-center text-lg text-uppercase my-0">Gudang Lab Jarkom <strong>Update Tabel</strong> </h2>
    <p align="center">Silahkan hubungi Kasublab atau Admin SILAB untuk lebih lanjutnya</p>
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
<!-- /.container -->
