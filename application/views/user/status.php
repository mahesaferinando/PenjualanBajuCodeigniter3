<div id="page-wrapper">

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800 row justify-content-center"><?= $title; ?></h1>

        <font color="black">
            <div class="jumbotron jumbotron-fluid">
                <form class="container">
                    <h2>STATUS PEMBAYARAN</h2>
                    <hr>
                    <div class="row">
                        <table id="example" class="table table-bordered table-active">
                            <thead style="color:black">
                                <tr>
                                    <th>Nama</th>
                                    <th style="width:300px">Bukti Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody style="color:black">
                                <?php foreach ($status as $key => $value) { ?>
                                    <tr class="warning">
                                        <td><?php echo $value->nama; ?></td>
                                        <td><img style="width: 350px; height:auto;" width="75%" height="75%" src="<?php echo site_url() ?>assets/img/bayar/<?php echo $value->gambar; ?>"></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </font>
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