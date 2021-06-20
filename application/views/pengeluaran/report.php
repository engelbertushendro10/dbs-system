<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<style>
		._table{ 
			width: 100%;
		}
		._th{
			font-weight: bold;
			text-align: center;
			padding: 10px;
		}
	</style>
</head>
<body class="_table">
	<div class="row">
		<div class="col text-center">
			<center><h3 class="h3 text-dark"><?= $title ?></h3></center>
			<!-- <h4 class="h4 text-dark "><strong><?= $perusahaan->nama_perusahaan ?></strong></h4> -->
		</div>
	</div>
	<hr>
	<br>
	<br>
	<div class="row">
		<!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> -->
		<table class="_table" border="1px" cellspacing="0">
			<thead class="_th">
				<tr>
					<td>No Keluar</td>
					<td>Nama Petugas</td>
					<td>Nama Customer</td>
					<td>Tanggal Keluar</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($all_pengeluaran as $pengeluaran): ?>
					<tr>
						<td><?= $pengeluaran->no_keluar ?></td>
						<td><?= $pengeluaran->nama_petugas ?></td>
						<td><?= $pengeluaran->nama_customer ?></td>
						<td><?= $pengeluaran->tgl_keluar ?> </td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>