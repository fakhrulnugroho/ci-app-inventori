<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('partials/head.php') ?>
</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
		<?php $this->load->view('partials/sidebar.php') ?>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content" data-url="<?= base_url('supplier') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
					<div class="float-right">
						<a href="<?= base_url('supplier') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<div class="card shadow">
							<div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
							<div class="card-body">
								<form action="<?= base_url('supplier/proses_ubah/' . $supplier->kode) ?>" id="form-tambah" method="POST">
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="kode"><strong>Kode</strong></label>
											<input type="text" name="kode" placeholder="Masukkan Kode supplier" autocomplete="off"  class="form-control" required value="<?= $supplier->kode ?>" maxlength="8" readonly>
										</div>
										<div class="form-group col-md-6">
											<label for="nama"><strong>Nama</strong></label>
											<input type="text" name="nama" placeholder="Masukkan Nama supplier" autocomplete="off"  class="form-control" required value="<?= $supplier->nama ?>">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-8">
											<label for="email"><strong>Email</strong></label>
											<input type="email" name="email" placeholder="Masukkan Email" autocomplete="off"  class="form-control" required value="<?= $supplier->email ?>">
										</div>
										<div class="form-group col-md-4">
											<label for="telepon"><strong>Telepon</strong></label>
											<input type="number" name="telepon" placeholder="Masukkan No Telepon" autocomplete="off"  class="form-control" required value="<?= $supplier->telepon ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="alamat"><strong>Alamat</strong></label>
										<textarea name="alamat" id="alamat" style="resize: none;" class="form-control" placeholder="Masukkan Alamat"><?= $supplier->alamat ?></textarea>
									</div>
									<hr>
									<div class="form-group">
										<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
										<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
									</div>
								</form>
							</div>				
						</div>
					</div>
				</div>
				</div>
			</div>
			<!-- load footer -->
			<?php $this->load->view('partials/footer.php') ?>
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>
</body>
</html>