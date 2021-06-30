<?php
include 'header.html';
$id = $_GET['mobil_id'];
include 'model_mobil.php';
$model_mobil = new Model_mobil();
$data = $model_mobil->edit_mobil($id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Data Mobil</title>
</head>
<br><br><br><br>
<body>
	
	<div class="container">
  	<div class="row">
    	<div class="col-lg-6 d-flex flex-column justify-content-center">
		<img src="assets/img/features-3.png" class="img-fluid" alt="">
	</div>
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Edit Data Mobil</h1>
	<br><br>
	<form form align="center" action="proses2.php" method="post"><strong>
		<label>ID Mobil</label>
		<br>
		<input class="form-control" type="number" name="mobil_id" value="<?php echo $data->mobil_id ?>">
		<br>
		<label>Merk Tipe</label>
		<br>
		<input class="form-control" type="text" name="merktipe" value="<?php echo $data->merktipe ?>">
		<br>
		<label>Tahun Keluaran</label>
		<br>
		<input class="form-control" type="number" name="thnkeluaran" value="<?php echo $data->thnkeluaran ?>">
		<br>
		<label>Tarif</label>
		<br>
		<input class="form-control" type="number" name="tarif" value="<?php echo $data->tarif ?>">
		<br><br></strong>
		<a class="btn btn btn-warning"  href="mobil.php">Kembali</a> 
		<button class="btn btn btn-info" type="submit" name="submit_edit">Submit</button> 
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