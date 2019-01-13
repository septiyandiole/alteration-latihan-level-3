<?php $this->load->view('admin/header'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <div class="row">                                
                    <?php echo form_open_multipart(); ?>
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" name="nama">               
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input class="form-control" name="slug">
                        </div>
                        
                        <div class="form-group">
                            <label>Cover</label>
                            <input type="file" name="cover">
                        </div>
                        
                        
                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>
                    <?php echo form_close(); ?>
                </div>
        </div>
        <!-- /#page-wrapper -->
<?php $this->load->view('admin/footer'); ?>