<?php
include 'connection.php';
class Model_member extends Connection
{
	public function __construct()
	{
		$this->conn = $this->get_connection();
	}

	public function insert($member_id, $nama, $alamat, $tlp)
	{
		$sql = "INSERT INTO member (member_id, nama, alamat ,tlp, status) VALUES ('$member_id', '$nama', '$alamat', '$tlp', '$status')";
		$this->conn->query($sql);
	}

	public function tampil_member()
	{
		$sql = "SELECT * FROM member";
		$bind = $this->conn->query($sql);
		while ($obj = $bind->fetch_object()) { 
			$baris[] = $obj;
		}
		if(!empty($baris)){
			return $baris;
		}
	}
	public function edit_member($id)
	{
		$sql = "SELECT * FROM member WHERE member_id='$id'";
		$bind = $this->conn->query($sql);
		while ($obj = $bind->fetch_object()) {
			$baris = $obj;
		}
		return $baris;
	}
	public function update_member($member_id, $nama, $alamat, $tlp)
	{
		$sql = "UPDATE member SET member_id='$member_id', nama='$nama', alamat='$alamat', tlp='$tlp'status='$status' 
		WHERE member_id='$id'";
		$this->conn->query($sql);
	}
	public function delete2($member_id)
	{ 
		$sql = "DELETE FROM member WHERE member_id='$member_id'";
		$this->conn->query($sql);
	}
}