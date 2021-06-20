<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col text-center">
			<center><h3 class="h3 text-dark"><?= $title ?></h3></center>
		</div>
	</div>
	<hr>
	<br>
	<br>
	<div class="row">
		<table class="_table" border="1px" cellspacing="0" width="100%">
			<thead>
				<tr>
					<td>No</td>
					<td>Kode Barang</td>
					<td>Nama Barang</td>
					<td>Type </td>
					<td>Stok</td>
					<td>Lebih</td>
					<td>Kurang</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($all_barang as $barang): ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $barang->kode_barang ?></td>
						<td><?= $barang->nama_barang ?></td>
						<td><?= $barang->satuan ?> </td>
						<td><?= $barang->stok ?> </td>
						<td><?= $barang->lebih ?> </td>
						<td><?= $barang->kurang ?> </td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
        <br>
        <br>
        <div class="md-3"> 
                    <p>Denpasar, <?= date ('d / m / Y')?></p>
        </div>
	</div>
</body>
</html>