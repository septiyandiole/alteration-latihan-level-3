<?php $this->load->view('home/header'); ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

          <div class="col-sm-12">

              <?php echo form_open_multipart(); ?>
                  <div class="form-group">
                      <label>Nama Produk</label>
                      <input class="form-control" placeholder="Nama Produk" name="nama"value="<?php echo $nama ; ?>">
                  </div>
                  <div class="form-group">
                      <label>Harga Produk</label>
                      <input class="form-control" placeholder="Harga Produk" name="harga" value="<?php echo $harga ; ?>">
                  </div>
                  <div class="form-group">
                      <label>Deskripsi Produk</label>
                      <textarea class="form-control" rows="3" name="deskripsi"><?php echo $deskripsi ; ?></textarea>
                  </div>
                  <div class="form-group">
                      <label>Input Gambar</label>
                      <img src="<?php echo base_url('/uploads/'.$gambar);?>">
                      <input type="hidden" name="gambar_hidden" value="<?php echo $gambar; ?>">
                      <input type="file" name="gambar">
                  </div>
                  <div class="form-group">
                      <label>Stok Produk</label>
                      <input class="form-control" placeholder="Stok Produk" name="stok"value="<?php echo $stok ; ?>">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit Button</button>
                  <button type="reset" class="btn btn-success">Reset Button</button>
              <?php echo form_close(); ?>

          </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php $this->load->view('home/footer'); ?>