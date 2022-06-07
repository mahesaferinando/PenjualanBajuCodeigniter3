        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 row justify-content-center"><?= $title; ?></h1>

          <div class="jumbotron jumbotron-fluid">
            <div class="row container-fluid">
            	<div class="col-lg">

            		<?= form_open_multipart('user/edit'); ?>
            		
            		<div class="form-group row">
					   <label for="email" class="col-sm-2 col-form-label">Email</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];?>" readonly>
					 	</div>
            		</div>

            		<div class="form-group row">
					   <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'];?>">
					      <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
						</div>
            		</div>

            		<div class="form-group row">
            			<div class="col-sm-2">Foto</div>
            			<div class="col-sm-10">
            				<div class="row">
            					<div class="col-sm-3">
            						<img src="<?= base_url('assets/img/profil/') . $user['image']; ?>" class="img-thumbnail">
            					</div>
            					<div class="col-sm-9">
            						<div class="custom-file">
            							<input type="file" class="custom-file-input" id="image" name="image">
            							<label class="custom-file-label" for="image">Pilih foto</label>
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>

            		<div class="form-group row justify-content-end">
            			<div class="col-sm-10">
            				<button type="submit" class="btn btn-success">Edit</button>
            			</div>
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