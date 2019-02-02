<?php $this->load->view('home/header'); ?>

    <!-- Page Content -->
    <div class="container">

		    <div class="row">
		        <div class="col-lg-12">
		           
                    <?php echo form_open_multipart(); ?>
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" name="username"value="<?php echo $username ; ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama Produk = <?php echo $produk->nama ; ?></label>    
                            <input class="form-control" name="id_produk" value="<?php echo $produk->id ; ?>">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Barang</label>
                            <input class="form-control" placeholder="Stok Avalaible <?php echo $produk->stok ; ?>" name="jumlah barang">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Button</button>
                        <button type="reset" class="btn btn-success">Reset Button</button>
                    <?php echo form_close(); ?>
		                        
		        </div>
		        <!-- /.col-lg-12 -->
		    </div>
		    <!-- /.row -->
    </div>
    <!-- /.container -->

<?php $this->load->view('home/footer'); ?>