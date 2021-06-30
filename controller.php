<?php
include 'model.php';
//tabel member
if (isset($_POST['submit_member'])) {
	$member_id = $_POST['member_id']; 
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tlp = $_POST['tlp'];
	$model = new Model();
	$model->insert_member($member_id, $nama, $alamat, $tlp);
	header('location:member.php');
}

if (isset($_POST['submit_edit_member'])) {
	$member_id = $_POST['member_id']; 
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tlp = $_POST['tlp'];
	$model = new Model();
	$model->update_member($member_id, $nama, $alamat, $tlp);
	header('location:member.php');
}

if (isset($_GET['member_id'])) {
	$member_id = $_GET['member_id'];
	$model = new Model();
	$model->delete_member($member_id);
	header('location:member.php');
}

//tabel rental
if (isset($_POST['submit_rental'])) {
	$rental_id = $_POST['rental_id'];
	$mobil_id = $_POST['mobil_id'];
	$member_id = $_POST['member_id']; 
	$lamarental = $_POST['lamarental'];
	$model = new Model();
	$model->insert_rental($rental_id,$mobil_id,$member_id, $lamarental);
	header('location:rental.php');
}

if (isset($_POST['submit_edit_rental'])) {
	$rental_id = $_POST['rental_id'];
	$mobil_id = $_POST['mobil_id'];
	$member_id = $_POST['member_id']; 
	$lamarental = $_POST['lamarental'];
	$model = new Model();
	$model->update_rental($rental_id,$mobil_id,$member_id, $lamarental);
	header('location:rental.php');
}

if (isset($_GET['rental_id'])) {
	$rental_id = $_GET['rental_id'];
	$model = new Model();
	$model->delete_rental($rental_id);
	header('location:rental.php');
}

//tabel mobil
if (isset($_POST['submit_mobil'])) {
	$mobil_id = $_POST['mobil_id'];
	$merktipe = $_POST['merktipe'];
	$thnkeluaran = $_POST['thnkeluaran']; 
	$tarif = $_POST['tarif'];
	$model = new Model();
	$model->insert_mobil($mobil_id,$merktipe,$thnkeluaran, $tarif);
	header('location:mobil.php');
}

if (isset($_POST['submit_edit_mobil'])) {
	$mobil_id = $_POST['mobil_id'];
	$merktipe = $_POST['merktipe'];
	$thnkeluaran = $_POST['thnkeluaran']; 
	$tarif = $_POST['tarif'];
	$model = new Model();
	$model->update_rental($mobil_id,$merktipe,$thnkeluaran, $tarif);
	header('location:mobil.php');
}

if (isset($_GET['mobil_id'])) {
	$mobil_id = $_GET['mobil_id'];
	$model = new Model();
	$model->delete_mobil($mobil_id);
	header('location:mobil.php');
}