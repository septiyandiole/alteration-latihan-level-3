<?php $this->load->view('home/header'); ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Shop Name</h1>
          <div class="list-group">
            <?php foreach ($kategori as $key => $value): ?>
              <a href="#" class="list-group-item"><?php echo $value->nama; ?></a>
            <?php endforeach; ?>  
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <?php foreach ($produk as $key => $value): ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key; ?>" class="<?php echo ($key==0)? ' active' : ''; ?>"></li>
              <?php endforeach ; ?>
            </ol>
            <div class="carousel-inner" role="listbox">
              <?php foreach ($produk as $key => $value): ?>
                <div class="carousel-item <?php echo ($key==0)? ' active' : ''; ?>">
                  <img class="d-block img-fluid" src="<?php echo base_url('/uploads/'.$value->gambar); ?>" alt="<?php echo $value->nama; ?>">
                </div>
              <?php endforeach ; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
            <?php foreach ($produk as $key => $value): ?>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="<?php echo base_url('/uploads/'.$value->gambar); ?>" width=100px height=100px></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#"><?php echo $value->nama; ?></a>
                    </h4>
                    <h5>Rp <?php echo $value->harga; ?></h5>
                    <p class="card-text"><?php echo $value->deskripsi; ?></p>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm btn-primary">Lihat</button>
                    <button class="btn btn-sm btn-success">Tambah ke Keranjang</button>
                  </div>
                </div>
              </div>
            <?php endforeach; ?> 
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php $this->load->view('home/footer'); ?>