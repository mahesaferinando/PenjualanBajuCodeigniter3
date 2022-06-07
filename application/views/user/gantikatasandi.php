        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 row justify-content-center"><?= $title; ?></h1>

            <div class="jumbotron jumbotron-fluid">

              <div class="row mx-auto my-2">
                <div class="col-lg-6">

                  <?= $this->session->flashdata('message');?>

                  <form action="<?= base_url('user/gantikatasandi'); ?>" method="post">
                    <div class="form-group">
                      <label for="current_password">Kata Sandi saat ini</label>
                      <input type="password" class="form-control" id="current_password" name="current_password">
                      <?= form_error('current_password', '<small class="text-danger pl-auto">', '</small>');?>
                    </div>
                    <div class="form-group">
                      <label for="new_password1">Kata Sandi baru</label>
                      <input type="password" class="form-control" id="new_password1" name="new_password1">
                      <?= form_error('new_password1', '<small class="text-danger pl-auto">', '</small>');?>
                    </div>
                    <div class="form-group">
                      <label for="new_password2">Ulangi Kata Sandi</label>
                      <input type="password" class="form-control" id="new_password2" name="new_password2">
                      <?= form_error('new_password2', '<small class="text-danger pl-auto">', '</small>');?>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success">Ganti Kata Sandi</button>
                    </div>
                  </form>
                </div>
              </div>

           </div>

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