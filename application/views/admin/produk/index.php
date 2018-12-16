<?php $this->load->view('admin/header') ?>   

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Produk</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-primary" href="<?php echo base_url('/index.php/admin/produk/add/');?>">Add</a><br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Stok</th>
                                <th>Tanggal Upload</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($produk as $key => $value) : ?>
                            <tr class="odd gradeX">
                                 <td><?php echo $value->id; ?></td>
                                <td><?php echo $value->nama; ?></td>
                                <td><?php echo $value->harga; ?></td>
                                <td><?php echo $value->deskripsi; ?></td>
                                <td class="center"><?php echo $value->gambar ?></td>
                                <td class="center"><?php echo $value->stok; ?></td>
                                <td class="center"><?php echo $value->tgl_upload; ?></td>
                                <td>
                                    <a class="btn btn-success" href="<?php echo base_url('/index.php/admin/produk/update/' . $value->id) ; ?>">Edit</a>
                                    <a class="btn btn-danger" href="<?php echo base_url('/index.php/admin/produk/delete/' . $value->id) ; ?>">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach ; ?>
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

<!-- Page-Level Demo Scripts - Tables - Use for reference -->

<?php $this->load->view('admin/footer') ?>

<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>  