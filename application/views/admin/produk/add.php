<?php $this->load->view('admin/header') ?>   
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Forms</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Basic Form Elements
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo form_open(); ?>
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input class="form-control" placeholder="Nama Produk" id="nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <label>Harga Produk</label>    
                                    <input class="form-control" placeholder="Harga Produk" id="harga" name="harga">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Produk</label>
                                    <textarea class="form-control" rows="3" id="deskripsi" name="deskripsi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Input Gambar</label>
                                    <input type="file" id="gambar" name="gambar">
                                </div>
                                <div class="form-group">
                                    <label>Stok Produk</label>    
                                    <input class="form-control" placeholder="Stok Produk" id="stok" name="stok">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Button</button>
                                <button type="reset" class="btn btn-success">Reset Button</button>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<?php $this->load->view('admin/footer') ?>