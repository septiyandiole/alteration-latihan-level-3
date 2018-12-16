<?php $this->load->view('admin/header') ?>   
<?php  // ambil data
        // bedain logic saat menampilkan data dan submit data
        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $nama_produk1 = $this->input->post('nama_produk');  /*sama dengan $_POST['nama']*/
            $harga_produk1 = $this->input->post('harga_produk');
            $deskripsi1 = $this->input->post('deskripsi');
            $stok_produk1 = $this->input->post('stok_produk');
            
        }
        else
        {
            $nama_produk1 = '';
            $harga_produk1 = '';
            $deskripsi1 = '';
            $stok_produk1 = '';
        }       
?>
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
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input class="form-control" placeholder="Nama Produk" id="nama_produk" name="nama_produk" value="<?php echo $nama_produk1 ; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Harga Produk</label>    
                                    <input class="form-control" placeholder="Harga Produk" id="harga_produk" name="harga_produk" value="<?php echo $harga_produk1 ; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Produk</label>
                                    <textarea class="form-control" rows="3" id="deskripsi" name="deskripsi"><?php echo $deskripsi1 ; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Input Gambar</label>
                                    <input type="file" id="gambar" name="gambar">
                                </div>
                                <div class="form-group">
                                    <label>Stok Produk</label>    
                                    <input class="form-control" placeholder="Stok Produk" id="stok_produk" name="stok_produk" value="<?php echo $stok_produk1 ; ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Button</button>
                                <button type="reset" class="btn btn-success">Reset Button</button>
                            </form>
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