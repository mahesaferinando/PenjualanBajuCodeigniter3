<head>
	<title>Post Berita</title>
</head>

<body>
	<div class="container">
		<div class="col-md-20 col-md-offset-2">
			<h1 class="h3 mb-4 text-gray-800 row justify-content-center"><?= $title; ?></h1>
			<form action="<?php echo base_url() . 'index.php/post_berita/simpan_post' ?>" method="post" enctype="multipart/form-data">
				<input type="text" name="judul" class="form-control" placeholder="Judul berita" required /><br />
				<textarea id="ckeditor" name="berita" class="form-control" required></textarea><br />
				<input type="file" name="filefoto" required><br><br>
				<button class="btn btn-success btn-lg" type="submit">Post Berita</button>
			</form>
		</div>

	</div>

	<script src="<?php echo base_url() . 'assets/jquery/jquery-2.2.3.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/ckeditor/ckeditor.js' ?>"></script>
	<script type="text/javascript">
		$(function() {
			CKEDITOR.replace('ckeditor');
		});
	</script>
</body>
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

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