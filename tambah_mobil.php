<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Mobil</title>
</head>
<br><br><br><br>
<body>

<div class="container">
  <div class="row">

  <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/features-4.png" class="img-fluid" alt="">
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Tambah Data Mobil</h1>
	<a class="btn btn btn-warning" href="mobil.php">Kembali</a>
	<br><br>
	<form align="center" action="proses2.php" method="post"> <strong>
		<label>ID Mobil</label>
		<br>
		<input class="form-control" type="number" name="mobil_id">
		<br>
		<label>Merk tipe</label>
		<br>
		<input class="form-control" type="text" name="merktipe"><br>
		<label>Tahun Keluaran</label>
		<br>
		<input class="form-control" type="number" name="thnkeluaran">
		<br>
		<label>Tarif</label>
        <br>
        <input class="form-control" type="number" name="tarif">
        <br><br></strong>
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-info" type="submit" name="submit_mobil">Submit</button>
		
	</form>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="images/home/hero.png" class="img-fluid" alt="">
    </div>
  </div>
</div>

	
</body>
<?php
include 'footer.html';
?>
</html>