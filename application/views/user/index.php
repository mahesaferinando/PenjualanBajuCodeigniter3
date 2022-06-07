        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 row justify-content-center"><?= $title; ?></h1>

          
            <div class="col-lg-6">
              <?= $this->session->flashdata('message'); ?>
            </div>
          
            <div class="jumbotron jumbotron-fluid">

            <div class="card mb-3 mx-5" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="<?= base_url('assets/img/profil/') . $user['image']; ?>" class="card-img">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $user ['name']; ?></h5>
                  <p class="card-text"><?= $user ['email']; ?></p>
                  <p class="card-text"><small class="text-muted">Akun ini dibuat pada <?= date('l d F Y', $user['date_created'])?> </small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->