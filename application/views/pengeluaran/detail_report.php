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
			<h3 class="h3 text-dark"><?= $title ?></h3>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<table class="table table-borderless">
				<tr>
					<td><strong>No keluar</strong></td>
					<td>:</td>
					<td><?= $pengeluaran->no_keluar ?></td>
				</tr>
				<tr>
					<td><strong>Nama Petugas</strong></td>
					<td>:</td>
					<td><?= $pengeluaran->nama_petugas ?></td>
				</tr>
				<tr>
					<td><strong>Nama Customer</strong></td>
					<td>:</td>
					<td><?= $pengeluaran->nama_customer ?></td>
				</tr>
				<tr>
					<td><strong>Waktu keluar</strong></td>
					<td>:</td>
					<td><?= $pengeluaran->tgl_keluar ?> - <?= $pengeluaran->jam_keluar ?></td>
				</tr>
			</table>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td><strong>No</strong></td>
						<td><strong>Nama Barang</strong></td>
						<td><strong>Jumlah</strong></td>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($all_detail_keluar as $detail_keluar): ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $detail_keluar->nama_barang ?></td>
							<td><?= $detail_keluar->jumlah ?> <?= strtolower($detail_keluar->satuan) ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>