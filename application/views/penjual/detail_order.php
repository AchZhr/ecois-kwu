<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Detail
        </h1>
    </section>
    <!-- Main content -->

    <section class="content">
        <div class="row">
            <div class='col-xs-12'>
                <div class='box box-primary'>
                    <div class='box-header  with-border'>
                        <h3 class='box-title'>Edit Data Produk</h3>
                    </div>
                    <div class="box-body">
                        <form>
                            <div class="form-group">
                                <label for="nama_barang" class="control-label">Order ID</label>
                                <div class="input-group">


                                    <input type="text" class="form-control" name="nama" id="nama_barang" data-error="Nama Barang harus diisi" readonly placeholder="nama barang" value="<?= $param->orderid ?>" required />
                                    <span class="input-group-addon">
                                        <span class="fa fa-cube"></span>
                                    </span>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="harga" class="control-label">Tanggal Order</label>
                                <div class="input-group">
                                    <input type="text" name="harga" id="harga" data-error="harga harus di isi" class="form-control" readonly placeholder="Harga Barang" value="<?= $param->tgl_order ?>" required>
                                    <span class="input-group-addon">
                                        <span class="fa fa-cube">
                                        </span>
                                    </span>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="nama_barang" class="control-label">Nama Produk</label>
                                <div class="input-group">


                                    <input type="text" class="form-control" name="nama" id="nama_barang" data-error="Nama Barang harus diisi" readonly placeholder="nama barang" value="<?= $param->nama_produk ?>" required />
                                    <span class="input-group-addon">
                                        <span class="fa fa-cube"></span>
                                    </span>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="nama_barang" class="control-label">Kategori</label></label>
                                <div class="input-group">


                                    <input type="text" class="form-control" name="nama" id="nama_barang" data-error="Nama Barang harus diisi" readonly placeholder="nama barang" value="<?= $param->kategori ?>" required />
                                    <span class="input-group-addon">
                                        <span class="fa fa-cube"></span>
                                    </span>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label for="harga" class="control-label">Harga</label>
                                <div class="input-group">
                                    <input type="number" name="harga" id="harga" data-error="harga harus di isi" class="form-control" readonly placeholder="Harga Barang" value="<?= number_format($param->harga_jual, 0, '', '.');  ?>" required>
                                    <span class="input-group-addon">
                                        <span class="fa fa-cube">
                                        </span>
                                    </span>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="harga" class="control-label">Jumlah</label>
                                <div class="input-group">
                                    <input type="number" name="harga" id="harga" data-error="harga harus di isi" class="form-control" readonly placeholder="Harga Barang" value="<?= $param->jumlah ?>" required>
                                    <span class="input-group-addon">
                                        <span class="fa fa-cube">
                                        </span>
                                    </span>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="harga" class="control-label">Total</label>
                                <div class="input-group">
                                    <input type="number" name="harga" id="harga" data-error="harga harus di isi" class="form-control" readonly placeholder="Harga Barang" value="<?= number_format($param->total, 0, '', '.'); ?>" required>
                                    <span class="input-group-addon">
                                        <span class="fa fa-cube">
                                        </span>
                                    </span>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="harga" class="control-label">Status</label>
                                <div class="input-group">
                                    <input type="text" name="harga" id="harga" data-error="harga harus di isi" class="form-control" readonly placeholder="Harga Barang" value="<?php if ($param->status == 0) {
                                                                                                                                                                                    echo 'Belum Dibayar';
                                                                                                                                                                                } else if ($param->jumlah == 1) {
                                                                                                                                                                                    echo 'Diproses';
                                                                                                                                                                                } else {
                                                                                                                                                                                    echo 'Selesai';
                                                                                                                                                                                }
                                                                                                                                                                                ?>" required>
                                    <span class="input-group-addon">
                                        <span class="fa fa-cube">
                                        </span>
                                    </span>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="harga" class="control-label">Keterangan</label>
                                <div class="input-group">
                                    <input type="text" name="harga" id="harga" data-error="harga harus di isi" class="form-control" readonly placeholder="Harga Barang" value="<?= $param->keterangan ?>" required>
                                    <span class="input-group-addon">
                                        <span class="fa fa-cube">
                                        </span>
                                    </span>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="box-footer">
                                <a href="<?php echo base_url('Order') ?>" class="btn btn-info ">Kembali</a>
                            </div>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section>
    <!-- Styles -->
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2022 <a href="<?= base_url('Home') ?>">ECOIS UPN JATIM </a>.</strong> All rights
    reserved.
</footer>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<script src="<?php echo base_url() ?>assets/admin/plugins/dropdown/js/jquery.dd.js"></script>

<script src="<?php echo base_url() ?>assets/admin/plugins/sweetalert/sweetalert2.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/Bootstrap-validator/validator.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/demo.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/select2/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('form').submit(function(e) {
            e.preventDefault()
        })
    })
</script>
</body>

</html>