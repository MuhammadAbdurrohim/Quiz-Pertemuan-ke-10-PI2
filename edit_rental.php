<?php
include 'header.html';
$id = $_GET['rental_id'];
include 'model_rental.php';
$model_rental = new Model_rental();
$data = $model_rental->edit_rental($id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Data Rental</title>
</head>
<br><br><br><br>
<body>
	
	<div class="container">
  	<div class="row">
    	<div class="col-lg-6 d-flex flex-column justify-content-center">
		<img src="assets/img/features-3.png" class="img-fluid" alt="">
	</div>
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Edit Data Rental</h1>
	<br><br>
	<form form align="center" action="proses3.php" method="post"><strong>
		<label>ID Rental</label>
		<br>
		<input class="form-control" type="number" name="rental_id" value="<?php echo $data->rental_id ?>">
		<br>
		<label>Mobil ID</label>
		<br>
		<input class="form-control" type="number" name="mobil_id" value="<?php echo $data->mobil_id ?>">
		<br>
		<label>Member ID</label>
		<br>
		<input class="form-control" type="number" name="member_id" value="<?php echo $data->member_id ?>">
		<br>
		<label>Lama Rental</label>
		<br>
		<input class="form-control" type="text" name="lamarental" value="<?php echo $data->lamarental ?>">
		<br><br></strong>
		<a class="btn btn btn-warning"  href="rental.php">Kembali</a> 
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