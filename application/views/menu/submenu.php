        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 row justify-content-center"><?= $title; ?></h1>

          <!-- Tabel Menu pengelolaan -->
          <div class="row">
          	<div class="col-lg">
          		<?php if(validation_errors()) : ?>
          			<div class="alert alert-danger" role="alert"></div>
          				<?= validation_errors();?>
          		<?php endif; ?>
          		<?= $this->session->flashdata('message'); ?>

          		 <!-- Tombol Tambah-->
         		 <a href="" class="btn btn-success mb-4" data-toggle="modal" data-target="#newSubMenuModal">Tambah Sub Menu</a>

          		<table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Sub Menu</th>
				      <th scope="col">Menu</th>
				      <th scope="col">URL</th>
				      <th scope="col">Icon</th>
				      <th scope="col">Active</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php $i =1; ?>
				  	<?php foreach ($subMenu as $sm) : ?>
				    <tr>
				      <th scope="row"><?= $i; ?></th>
				       <td><?= $sm['title']; ?></td>
				       <td><?= $sm['menu']; ?></td>
				       <td><?= $sm['url']; ?></td>
				       <td><?= $sm['icon']; ?></td>
				       <td><?= $sm['is_active']; ?></td>
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
		<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="newSubMenuModalTitle">Tambah Sub menu</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('menu/submenu'); ?>" method="post">
		      <div class="modal-body">
					<div class="form-group">				    
				    	<input type="text" class="form-control" id="title" name="title" placeholder="Nama Sub Menu ...">
				  	</div>
				  	<div class="form-group">
				  		<select name="menu_id" id="menu_id" class="form-control">
				  			<option value="">Pilih Menu</option>
				  			<?php foreach($menu as $m): ?>
				  			<option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
				  			<?php endforeach; ?>
				  		</select>
				  	</div>
				  	<div class="form-group">				    
				    	<input type="text" class="form-control" id="url" name="url" placeholder="Sub Menu URL">
				  	</div>
				  	<div class="form-group">				    
				    	<input type="text" class="form-control" id="icon" name="icon" placeholder="Sub Menu Ikon">
				  	</div>
				  	<div class="form-group">
				  		<div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="is_active" value="1" name="is_active" checked="1">
						  <label class="custom-control-label" for="is_active">Sub Menu aktif?</label>
						</div>
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