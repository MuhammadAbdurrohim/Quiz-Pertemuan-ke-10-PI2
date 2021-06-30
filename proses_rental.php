<?php
include 'model_rental.php';
if (isset($_POST['submit_rental'])) {
	$rental_id = $_POST['rental_id']; 
	$mobil_id = $_POST['mobil_id'];
	$member_id = $_POST['member_id'];
	$lamarental = $_POST['lamarental'];
	$model_rental = new model_rental();
	$model_rental->insert($rental_id, $mobil_id, $member_id, $lamarental);
	header('location:rental.php');
}
if (isset($_POST['submit_edit'])) {
	$id = $_POST['rental_id']; 
	$rental_id = $_POST['rental_id']; 
	$mobil_id = $_POST['mobil_id'];
	$member_id = $_POST['member_id'];
	$lamarental = $_POST['lamarental'];
	$model_rental = new model_rental();
	$model_rental->update_rental($rental_id, $mobil_id, $member_id, $lamarental);
	header('location:rental.php');
}
if (isset($_GET['rental_id'])) {
	$id = $_GET['rental_id'];
	$model_rental = new Model_rental();
	$model_rental->delete2($id);
	header('location:rental.php');
}