<?php $this->load->view('admin/header') ?>   

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Order</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID Order</th>
                                <th>Username</th>
                                <th>Nama Produk</th>
                                <th>Jumlah Barang</th>
                                <th>Tangal Order</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($order as $key => $value) : ?>
                            <tr class="odd gradeX">
                                 <td><?php echo $value->id_produk; ?></td>
                                <td><?php echo $value->username; ?></td>
                                <td><?php echo $value->nama; ?></td>
                                <td><?php echo $value->jumlah_barang; ?></td>
                                <td class="center"><?php echo $value->tgl_order; ?></td>
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