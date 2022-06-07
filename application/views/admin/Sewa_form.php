<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800 row justify-content-center"><?= $title; ?></h1>

	<font color="black">
		<div class="jumbotron jumbotron-fluid">
			<div class="form-group">
			</div>
			<?php $this->session->flashdata('sewa') ?>
			<form class="container" action="<?= $aksi ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nama Barang: </label>
					<input type="text" name="nama" class="form-control" placeholder="Inputkan Nama Barang" required value="<?php echo $nama; ?>">
				</div>

				<div class="form-group">
					<label>Deskripsi Barang: </label><br />
					<textarea name="deskripsi" cols="131" rows="5"><?php echo $deskripsi; ?></textarea>
				</div>

				<div class="form-group">
					<label>Harga: </label>
					<input type="text" name="harga" class="form-control" placeholder="Inputkan Harga Barang" required value="<?php echo $harga; ?>">
				</div>

				<div class="form-group">
					<label>Gambar Barang: </label>
					<input type="file" name="filefoto" class="form-control" placeholder="Inputkan Gambar Barang">
				</div>

				<input type="hidden" name="id_sewa" value="<?php echo $id_sewa; ?>">
				<button class="btn btn-success" type="submit"><?php echo $button; ?></button>
				<a href="<?php echo site_url('sewa') ?>" class="btn btn-default">Cancel</a>
			</form>
		</div>
	</font>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Anda yakin?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Klik "Keluar" jika Anda ingin mengakhiri sesi di website ini.</div>
			<div class="modal-footer">
				<button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button>
				<a class="btn btn-success" href="<?= base_url('auth/logout'); ?>">Keluar</a>
			</div>
		</div>
	</div>
</div>