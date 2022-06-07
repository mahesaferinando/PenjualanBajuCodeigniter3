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
                    <div class="row">
                        <table id="example" class="table table-bordered table-active">
                            <thead style="color:black">
                                <tr>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th style="width:200px">Contoh Desain</th>
                                </tr>
                            </thead>
                            <tbody style="color:black">
                                <?php foreach ($sewa as $key => $value) { ?>
                                    <tr class="warning">
                                        <td><?php echo $value->nama_barang; ?></td>
                                        <td><?php echo $value->deskripsi_barang; ?></td>
                                        <td><?php echo $value->harga_sewa; ?></td>

                                        <td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url() ?>assets/img/uploads/<?php echo $value->gambar; ?>"></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </font>
        <!-- /. ROW  -->
    </div>

    <!-- /. PAGE INNER  -->
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