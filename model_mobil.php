<?php
include 'connection.php';
class Model_mobil extends Connection
{
	public function __construct()
	{
		$this->conn = $this->get_connection();
	}

	public function insert($mobil_id, $merktipe, $thnkeluaran, $tarif)
	{
		$sql = "INSERT INTO mobil (mobil_id, merktipe, thnkeluaran ,tarif, status) VALUES ('$mobil_id', '$merktipe', '$thnkeluaran', '$tarif', '$status')";
		$this->conn->query($sql);
	}

	public function tampil_mobil()
	{
		$sql = "SELECT * FROM mobil";
		$bind = $this->conn->query($sql);
		while ($obj = $bind->fetch_object()) { 
			$baris[] = $obj;
		}
		if(!empty($baris)){
			return $baris;
		}
	}
	public function edit_mobil($id)
	{
		$sql = "SELECT * FROM mobil WHERE mobil_id='$id'";
		$bind = $this->conn->query($sql);
		while ($obj = $bind->fetch_object()) {
			$baris = $obj;
		}
		return $baris;
	}
	public function update_mobil($mobil_id, $merktipe, $thnkeluaran, $tarif)
	{
		$sql = "UPDATE mobil SET mobil_id='$mobil_id', merktipe='$merktipe', thnkeluaran='$thnkeluaran', tarif='$tarif'status='$status' 
		WHERE mobil_id='$id'";
		$this->conn->query($sql);
	}
	public function delete2($mobil_id)
	{ 
		$sql = "DELETE FROM mobil WHERE mobil_id='$mobil_id'";
		$this->conn->query($sql);
	}
}