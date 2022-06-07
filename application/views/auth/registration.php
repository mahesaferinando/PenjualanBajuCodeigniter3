<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto" style="background-color: rgba(135,206,235, 0.7);">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <h1 class="h4 text-gray-900 mb-2 row justify-content-center">
              <i class="fas fa-fw fa-tshirt"></i>
              GARMENESIA
            </h1>
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Isi formulir dibawah ini</h1>
            </div>
            <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
              <div class="form-group" class="valid-feedback">
                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Kata Sandi">
                  <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulang Kata Sandi">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block">
                Daftar
              </button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="<?= base_url('auth/') ?>">Sudah punya akun? Masuk disini!</a>
            </div>
          </div>
          <font size="1" class="row justify-content-center" color="black">Copyright &copy; GARMENESIA <?= date('Y') ?></font>
        </div>
      </div>
    </div>
  </div>

</div>