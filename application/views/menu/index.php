        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 row justify-content-center"><?= $title; ?></h1>

          <!-- Tabel Menu pengelolaan -->
          <div class="row">
          	<div class="col-lg">
          		<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
          		<?= $this->session->flashdata('message'); ?>

          		 <!-- Tombol Tambah-->
         		 <a href="" class="btn btn-success mb-4" data-toggle="modal" data-target="#newMenuModal">Tambah Menu</a>

          		<table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Menu</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php $i =1; ?>
				  	<?php foreach ($menu as $m) : ?>
				    <tr>
				      <th scope="row"><?= $i; ?></th>
				      <td><?= $m['menu']; ?></td>
				      <td>
				      	<a href="" class="badge badge-primary">Edit</a>
				      	<a href="" class="badge badge-danger">Hapus</a>
				      </td>
				    </tr>
				    <?php $i++; ?>
					<?php endforeach; ?>
				  </tbody>
				</table>
          	</div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

		<!-- Modal -->
		<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="newMenuModalTitle">Tambah Menu</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('menu'); ?>" method="post">
		      <div class="modal-body">
					<div class="form-group">				    
				    	<input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu">
				  </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
		        <button type="submit" class="btn btn-success">Tambah</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>