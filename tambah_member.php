<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">

<head>
	<title>Tambah Data Member</title>
</head>
<br><br><br><br>
<body>

<div class="container">
  <div class="row">

  <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/features-4.png" class="img-fluid" alt="">
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Tambah Data Member</h1>
	<a class="btn btn btn-warning" href="member.php">Kembali</a>
	<br><br>
	<form align="center" action="proses1.php" method="post"> <strong>
		<label>Member ID</label>
		<br>
		<input class="form-control" type="number" name="member_id">
		<br>
		<label>Nama</label>
		<br>
		<input class="form-control" type="text" name="nama"><br>
		<label>Alamat</label>
		<br>
		<input class="form-control" type="text" name="alamat">
		<br>
		<label>Telephone</label>
        <br>
        <input class="form-control" type="number" name="tlp">
        <br><br></strong>
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-info" type="submit" name="submit_member">Submit</button>
		
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