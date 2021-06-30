<?php
include 'header.html';
include 'model_member.php';
$model_member = new model_member();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Data Member</title>
</head>
<br><br><br><br>
<body align="center">
	
	<div align="center" class="tabel">
		<h1>Data Member</h1>		
		<a href="tambah_member.php" button class="btn btn btn-success">Tambah Data</a>
		<br><br>
		<a href="print_member.php" target="_blank" button class="btn btn btn-info">Cetak Data</a>
		<br><br>
		<table  align="center" width="800px" border="1">
			<thead>
				<tr align="center" style="background-color:pink;">
					<th>Member ID</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Telephone</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model_member->tampil_member();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr style="background-color:aqua;">
							<td><?=$data->member_id ?></td>
							<td><?=$data->nama ?></td>
							<td><?=$data->alamat ?></td>
							<td><?=$data->tlp ?></td>
							
							<td>
								<a name="edit" id="edit" class="btn btn btn-warning" href="edit_member.php?member_id=<?=$data->member_id ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn btn-danger" href="proses1.php?member_id=<?=$data->member_id ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td align="center" colspan="9">Belum ada data pada tabel member.</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</body>
<?php
include 'footer.html';
?>
</html>