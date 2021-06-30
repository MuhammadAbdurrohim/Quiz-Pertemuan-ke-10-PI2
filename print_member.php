<?php
include 'connection.php';
class Model_rental extends Connection
{
	public function __construct()
	{
		$this->conn = $this->get_connection();
	}

	public function insert($rental_id, $mobil_id, $member_id, $lamarental)
	{
		$sql = "INSERT INTO rental (rental_id, mobil_id, member_id ,lamarental, status) VALUES ('$rental_id', '$mobil_id', '$member_id', '$lamarental', '$status')";
		$this->conn->query($sql);
	}

	public function tampil_rental()
	{
		$sql = "SELECT * FROM rental";
		$bind = $this->conn->query($sql);
		while ($obj = $bind->fetch_object()) { 
			$baris[] = $obj;
		}
		if(!empty($baris)){
			return $baris;
		}
	}
	public function edit_rental($id)
	{
		$sql = "SELECT * FROM rental WHERE rental_id='$id'";
		$bind = $this->conn->query($sql);
		while ($obj = $bind->fetch_object()) {
			$baris = $obj;
		}
		return $baris;
	}
	public function update_rental($rental_id, $mobil_id, $member_id, $lamarental)
	{
		$sql = "UPDATE rental SET rental_id='$rental_id', mobil_id='$mobil_id', member_id='$member_id', lamarental='$lamarental'status='$status' 
		WHERE rental_id='$id'";
		$this->conn->query($sql);
	}
	public function delete2($rental_id)
	{ 
		$sql = "DELETE FROM rental WHERE rental_id='$rental_id'";
		$this->conn->query($sql);
	}
}