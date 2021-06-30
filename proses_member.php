<?php
include 'model_member.php';
if (isset($_POST['submit_member'])) {
	$member_id = $_POST['member_id']; 
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tlp = $_POST['tlp'];
	$model_member = new model_member();
	$model_member->insert($member_id, $nama, $alamat, $tlp);
	header('location:member.php');
}
if (isset($_POST['submit_edit'])) {
	$id = $_POST['member_id']; 
	$member_id = $_POST['member_id']; 
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tlp = $_POST['tlp'];
	$model_member = new model_member();
	$model_member->update_member($member_id, $nama, $alamat, $tlp);
	header('location:member.php');
}
if (isset($_GET['member_id'])) {
	$id = $_GET['member_id'];
	$model_member = new Model_member();
	$model_member->delete2($id);
	header('location:member.php');
}