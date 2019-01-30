<?php $this->load->view('home/header'); ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">


          <!-- /.row -->
          <div class="col-sm-12">





              <div class="col-lg-6"
              <div class="col-sm-12">

                  <img src="<?php echo base_url('/uploads/'.$produk->gambar);?>">
              </div>
              </div>
              <div class="col-lg-6">
                      <label>Nama Produk : <?php echo $produk->nama ; ?></label>
                      <label>Harga Produk : <?php echo $produk->harga ; ?> </label>
                      <label>Deskripsi Produk : <?php echo $produk->deskripsi ; ?></label>
                      <label>Stok Produk : <?php echo $produk->stok ; ?></label>
                        <button type="submit" class="btn btn-primary"> Order </button>
              </div>

              <?php echo form_open_multipart(); ?>

                  <?php echo form_close(); ?>

          </div>

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php $this->load->view('home/footer'); ?>