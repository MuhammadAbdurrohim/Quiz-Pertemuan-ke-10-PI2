<?php
include 'model_mobil.php';
$model_mobil = new model_mobil();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Data Mobil</title>
	<style>
		h1 {
			text-align: center;
		}
		table, 
		td, 
		th {
			border: 1px solid #ddd;
			text-align: left;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, 
		td {
			padding: 15px;
		}
	</style>
</head>

<body>
	<h1>Laporan Data Mobil</h1>
	<table>
		<thead>
			<tr style="background-color:pink;">
			<th>ID Mobil</th>
			<th>Merk tipe</th>
			<th>Tahun Keluaran</th>
			<th>Tarif</th>	
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model_mobil->tampil_mobil();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr style="background-color:pink;">
							<td style="background-color:aqua;"><?=$data->mobil_id ?></td>
							<td style="background-color:aqua;"><?=$data->merktipe ?></td>
							<td style="background-color:aqua;"><?=$data->thnkeluaran ?></td>
							<td style="background-color:aqua;"><?=$data->tarif ?></td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel mobil.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
		window.print();
	</script>
</body>

</html>