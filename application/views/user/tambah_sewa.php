<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800 row justify-content-center"><?= $title; ?></h1>

  <font color="black">
    <div class="jumbotron jumbotron-fluid">

      <form class="container" action="<?= base_url('/user/tambah_sewa_aksi') ?>" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="exampleInputEmail1">Nama Lengkap</label>
          <input type="text" class="form-control" name="namalengkap" value="<?= $user['name']; ?>" readonly>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">No. Hp</label>
          <input type="text" class="form-control" name="nohp">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Alamat</label> <br />
          <textarea name="alamat" cols="144" rows="5"> </textarea>
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Jenis Pakaian</label>
          <select class="form-control" name="id_sewa">
            <?php foreach ($barang as $key => $value) { ?>
              <option value='<?= $value->id_sewa ?>'><?php echo $value->nama_barang; ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Jenis Bahan</label>
          <select class="form-control" name="kemasan">
            <option value="Lacoste CVC 20s TM">Lacoste CVC 20s TM</option>
            <option value="Lacoste CVC 24s TM">Lacoste CVC 24s TM</option>
            <option value="Pique CVC 24s Knitto">Pique CVC 24s Knitto</option>
            <option value="Pique Combed 30s Knitto">Pique Combed 30s Knitto</option>
            <option value="Lacoste CVC 24s Asmaja">Lacoste CVC 24s Asmaja</option>
            <option value="Lacoste Combed 30s Japan">Lacoste Combed 30s Japan</option>
            <option value="Lacoste 22 MSA">Lacoste 22 MSA</option>
            <option value="Lacoste CVC 20s Misty">Lacoste CVC 20s Misty</option>
            <option value="Lacoste CVC 24s Misty">Lacoste CVC 24s Misty</option>
            <option value="Pique CVC 24s Misty">Pique CVC 24s Misty</option>
            <option value="Pique Combed 30s Misty">Pique Combed 30s Misty</option>
            <option value="Pique CVC 24s Sinar">Pique CVC 24s Sinar</option>
            <option value="Lacoste Cotton Padasuka">Lacoste Cotton Padasuka</option>
            <option value="Lacoste CVC 20s Padasuka">Lacoste CVC 20s Padasuka</option>
            <option value="Lacoste PE 20s">Lacoste PE 20s</option>
            <option value="Dryfit">Dryfit</option>
            <option value="Lacoste PE 20s">Lacoste PE 20s</option>
            <option value="Lacoste PE 30s">Lacoste PE 30s</option>
            <option value="Lacoste Cotton Purnama">Lacoste Cotton Purnama</option>            
          </select>
        </div>

        <div class="form-group">

          <input type="hidden" class="form-control" name='id_user' value='<?= $user['id'] ?>'>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Jumlah Banyak (Perlusin)</label>
          <input type="number" class="form-control" name="lama">
        </div>

        
        <div class="form-group">
          <label for="exampleFormControlSelect1">Jasa Pengiriman</label>
          <select class="form-control" name="jasa">
            <option value="JNE">JNE</option>
            <option value="J&T">J&T</option>
            <option value="Sicepat">Sicepat</option>
          </select>
        </div>

        <div class="form-group row">
          <div class="col-sm-2">Upload Desain</div>
                <div class="row">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="gambardesain" name="gambardesain">
                    <label class="custom-file-label" for="image">Pilih foto</label>
                  </div>
            </div>
          </div>
                         
                     

        <button type="submit" class="btn btn-success" name="type" value="tambah">Submit</button>
 

      </form>
    </div>
  </font>
  <!-- /.container-fluid -->

</div>
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
<!-- End of Main Content -->



<!-- 

<div class="jumbotron jumbotron-fluid">
    <div class="container my-1">
      <h1 class="display my-auto mx-auto">Fluid jumbotron</h1>
      <font color="black"><p class="lead my-5">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p></font>
    </div>
  </div>
</div>


-->