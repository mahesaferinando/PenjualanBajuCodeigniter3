<div id="page-wrapper">
	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800 row justify-content-center"><?= $title; ?></h1>

		<font color="black">
			<div class="jumbotron jumbotron-fluid">
				<form class="container">
					<h2>DATA BARANG</h2>
					<hr>
					<div><?= $this->session->flashdata('pesan') ?>
						<div class="col-md-12 text-right">

							<div class="col-md-12 text-right">
								<a href="<?= base_url('/Cetakpdf/laporan/') ?>" class="btn btn-primary" style="margin-top:20px; margin-bottom:20px">
									<i class="fa fa-print"></i> Cetak Laporan</a>

								<a href="<?= base_url('/Cetakpdf/pesanan/') ?>" class="btn btn-success" style="margin-top:20px; margin-bottom:20px">
									<i class="fa fa-print"></i> Cetak Pesanan</a>

								<a href="<?php echo site_url('sewa/tambah'); ?>" class="btn btn-warning" style="margin-top:20px; margin-bottom:20px">
									<i class="fa fa-plus-circle"></i> Tambah Data</a>
							</div>

						</div>
						<div class="row">
							<table id="example" class="table table-bordered table-active ">
								<thead style="color:black">
									<tr>
										<th>Nama</th>
										<th>Deskripsi</th>
										<th>Harga</th>
										<th style="width:200px">Contoh Desain</th>
										<th style="width: 150px">Aksi</th>
									</tr>
								</thead>
								<tbody style="color:black">
									<?php foreach ($sewa as $key => $value) { ?>
										<tr class="warning">
											<td><?php echo $value->nama_barang; ?></td>
											<td><?php echo $value->deskripsi_barang; ?></td>
											<td><?php echo $value->harga_sewa; ?></td>

											<td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url() ?>assets/img/uploads/<?php echo $value->gambar; ?>"></td>
											<td>

												<a href="<?php echo site_url('sewa/update/' . $value->id_sewa); ?>" class="btn btn-primary">
													<i class="fa fa-pencil-square">Edit</i>
												</a>
												<a href="<?php echo site_url('sewa/delete/' . $value->id_sewa); ?>" class="btn btn-danger">
													<i class="fa fa-trash-o">Hapus</i>
												</a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>

					<!-- /. ROW  -->
			</div>
			<!-- /. PAGE INNER  -->