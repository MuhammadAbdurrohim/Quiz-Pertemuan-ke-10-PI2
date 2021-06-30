<?php
include 'header.html';
$id = $_GET['member_id'];
include 'model_member.php';
$model_member = new Model_member();
$data = $model_member->edit_member($id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Data Member</title>
</head>
<br><br><br><br>
<body>
	
	<div class="container">
  	<div class="row">
    	<div class="col-lg-6 d-flex flex-column justify-content-center">
		<img src="assets/img/features-3.png" class="img-fluid" alt="">
	</div>
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Edit Data Member</h1>
	<br><br>
	<form form align="center" action="proses1.php" method="post"><strong>
		<label>Member ID </label>
		<br>
		<input class="form-control" type="number" name="member_id" value="<?php echo $data->member_id ?>">
		<br>
		<label>Nama</label>
		<br>
		<input class="form-control" type="text" name="nama" value="<?php echo $data->nama ?>">
		<br>
		<label>Alamat</label>
		<br>
		<input class="form-control" type="text" name="alamat" value="<?php echo $data->alamat ?>">
		<br>
		<label>Telephone</label>
		<br>
		<input class="form-control" type="number" name="tlp" value="<?php echo $data->tlp ?>">
		<br><br></strong>
		<a class="btn btn btn-warning"  href="member.php">Kembali</a> 
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