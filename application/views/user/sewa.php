        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 row justify-content-center">Pembelian</h1>

            <font color="black">
                <div class="jumbotron jumbotron-fluid">
                    <form class="container">
                        <h2>PEMBELIAN</h2>
                        <hr>

                        <div class="col-md-12 text-right">
                            <a href="<?= base_url('/Cetakpdf/pembelian/') . $user['id']; ?>" class="btn btn-primary" style="margin-top:20px; margin-bottom:20px">
                                <i class="fa fa-print"></i> Cetak Invoice</a>

                            <a href="<?php echo site_url('user/tambah_sewa'); ?>" class="btn btn-warning" style="margin-top:20px; margin-bottom:20px">
                                <i class="fa fa-plus-circle"></i> Tambah Pembelian</a>

                            <a href="<?php echo site_url('user/reset_sewa/') . $user['id']; ?>" class="btn btn-danger" style="margin-top:20px; margin-bottom:20px">
                                <i class="fa fa-trash"></i> Reset Pesanan</a>
                        </div>


                        <div class="row">
                            <table id="example" class="table table-bordered table-active ">
                                <thead style="color:black">
                                    <tr>

                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Total Harga</th>
                                        <th style="width:200px">Desain</th>

                                    </tr>
                                    <?php foreach ($sewa as $key => $value) { ?>

                                        <td><?php echo $value->nama_barang; ?></td>
                                        <td><?php echo $value->deskripsi_barang; ?></td>
                                        <td><?php echo $value->harga_sewa; ?></td>
                                        <td><?php echo $value->lama; ?></td>
                                        <td><?php echo $value->total_harga; ?></td>
                                        <td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url() ?>assets/img/desain/<?php echo $value->gambardesain; ?>"></td>

                                        </tr>
                                    <?php } ?>
                                </thead>
                        </div>
                        </table>
                </div>
                <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

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