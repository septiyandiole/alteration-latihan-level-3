<?php $this->load->view('admin/header'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-info" href="<?php echo base_url('/index.php/admin/kategori/add/'); ?>">Add</a><br><br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Kategori
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Slug</th>
                                        <th>Cover</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kategori as $key => $value): ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $value->nama; ?></td>
                                        <td><?php echo $value->slug; ?></td>
                                        
                                        <td><img src="<?php echo base_url('/uploads/'.$value->cover); ?>" width=100px height=100px></td>
                                        
                                        <td>
                                            <a class="btn btn-info" href="<?php echo base_url('/index.php/admin/kategori/update/'.$value->id); ?>">Update</a>
                                            <a class="btn btn-danger" href="<?php echo base_url('/index.php/admin/kategori/delete/'.$value->id); ?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

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

<?php $this->load->view('admin/footer'); ?>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>