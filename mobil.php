<?php
include 'header.html';
include 'model_mobil.php';
$model_mobil = new model_mobil();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Data Mobil</title>
</head>
<br><br><br><br>
<body align="center">
	
	<div align="center" class="tabel">
		<h1>Data Mobil</h1>		
		<a href="tambah_mobil.php" button class="btn btn btn-success">Tambah Data</a>
		<br><br>
		<a href="print_mobil.php" target="_blank" button class="btn btn btn-info">Cetak Data</a>
		<br><br>
		<table  align="center" width="800px" border="1">
			<thead>
				<tr align="center" style="background-color:pink;">
					<th>ID Mobil</th>
					<th>Merk tipe</th>
					<th>Tahun Keluaran</th>
					<th>Tarif</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model_mobil->tampil_mobil();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr style="background-color:aqua;">
							<td><?=$data->mobil_id ?></td>
							<td><?=$data->merktipe ?></td>
							<td><?=$data->thnkeluaran ?></td>
							<td><?=$data->tarif ?></td>
							
							<td>
								<a name="edit" id="edit" class="btn btn btn-warning" href="edit_mobil.php?mobil_id=<?=$data->mobil_id ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn btn-danger" href="proses2.php?mobil_id=<?=$data->mobil_id ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td align="center" colspan="9">Belum ada data pada tabel mobil.</td>
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