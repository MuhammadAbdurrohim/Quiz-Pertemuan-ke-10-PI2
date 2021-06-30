<?php
include 'model_mobil.php';
if (isset($_POST['submit_mobil'])) {
	$mobil_id = $_POST['mobil_id']; 
	$merktipe = $_POST['merktipe'];
	$thnkeluaran = $_POST['thnkeluaran'];
	$tarif = $_POST['tarif'];
	$model_mobil = new model_mobil();
	$model_mobil->insert($mobil_id, $merktipe, $thnkeluaran, $tarif);
	header('location:mobil.php');
}
if (isset($_POST['submit_edit'])) {
	$id = $_POST['mobil_id']; 
	$mobil_id = $_POST['mobil_id']; 
	$merktipe = $_POST['merktipe'];
	$thnkeluaran = $_POST['thnkeluaran'];
	$tarif = $_POST['tarif'];
	$model_mobil = new model_mobil();
	$model_mobil->update_mobil($mobil_id, $merktipe, $thnkeluaran, $tarif);
	header('location:mobil.php');
}
if (isset($_GET['mobil_id'])) {
	$id = $_GET['mobil_id'];
	$model_mobil = new Model_mobil();
	$model_mobil->delete2($id);
	header('location:mobil.php');
}