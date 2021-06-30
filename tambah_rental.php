<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Rental</title>
</head>
<br><br><br><br>
<body>

<div class="container">
  <div class="row">

  <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/features-4.png" class="img-fluid" alt="">
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Tambah Data Rental</h1>
	<a class="btn btn btn-warning" href="rental.php">Kembali</a>
	<br><br>
	<form align="center" action="proses3.php" method="post"> <strong>
		<label>ID Rental </label>
		<br>
		<input class="form-control" type="number" name="rental_id">
		<br>
		<label>Mobil ID</label>
		<br>
		<input class="form-control" type="number" name="mobil_id"><br>
		<label>Member ID</label>
		<br>
		<input class="form-control" type="number" name="member_id">
		<br>
		<label>Lama Rental</label>
        <br>
        <input class="form-control" type="text" name="lamarental">
        <br><br></strong>
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-info" type="submit" name="submit_rental">Submit</button>
		
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