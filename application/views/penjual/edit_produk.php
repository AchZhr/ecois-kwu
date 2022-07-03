<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Produk
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
                        <?php echo form_open_multipart('Produk/update', array('role' => "form", 'id' => "myForm", 'data-toggle' => "validator")); ?>
                        <div class="form-group">
                            <label for="nama_barang" class="control-label">Nama Produk</label>
                            <div class="input-group">
                                <input type="hidden" name="id" value="<?= $param->id_produk ?>">
                                <input type="hidden" name="image" value="<?= $param->image ?>">

                                <input type="text" class="form-control" name="nama" id="nama_barang" data-error="Nama Barang harus diisi" placeholder="nama barang" value="<?= $param->nama_produk ?>" required />
                                <span class="input-group-addon">
                                    <span class="fa fa-cube"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="kategori" class="control-label">Kategori</label>
                            <div class="input-group">
                                <select class="form-control" name="kategori" id="kategori" style="width: 100%;">
                                    <option value="<?= $param->kategori ?>" selected><?= $param->kategori ?></option>

                                    <option value="Fashion & Aksesoris">Fashion & Aksesoris</option>
                                    <option value="Sepatu">Sepatu</option>
                                    <option value="Pakaian">Pakaian</option>
                                    <option value="Produk Kecantikan">Produk Kecantikan</option>
                                    <option value="Food & Beverage">Food & Beverage</option>
                                    <option value="Handphone & Aksesoris">Handphone & Aksesoris</option>
                                    <option value="Hobi & Koleksi">Hobi & Koleksi</option>
                                    <option value="Alat Kesehatan">Alat Kesehatan</option>
                                    <option value="Komputer & Aksesoris">Komputer & Aksesoris</option>
                                    <option value="Olahraga & Outdoor">Olahraga & Outdoor</option>
                                    <option value="Otomotif">Otomotif</option>
                                    <option value="Buku & ALat Tulis">Buku & ALat Tulis</option>
                                    <option value="Jasa & Layanan">Jasa & Layanan</option>

                                </select>

                                <span class="input-group-addon">
                                    <span class="fa fa-list"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="nama_barang" class="control-label">Deskripsi(Opsional)</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="deskripsi" id="dskripsi" data-error="Nama Barang harus diisi" value="<?= $param->deskripsi ?>" placeholder="Deskripsi" />
                                <span class=" input-group-addon">
                                    <span class="fa fa-file-text-o"></span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="control-label">Harga</label>
                            <div class="input-group">
                                <input type="number" name="harga" id="harga" data-error="harga harus di isi" class="form-control" placeholder="Harga Barang" value="<?= $param->harga ?>" required>
                                <span class="input-group-addon">
                                    <span class="fa fa-money">
                                    </span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="control-label">Diskon(Opsional)</label>
                            <div class="input-group">
                                <input type="number" name="diskon" id="diskon" class="form-control" placeholder="Diskon" value="<?= $param->diskon ?>">
                                <span class="input-group-addon">
                                    <span class="fa fa-file-text-o">
                                    </span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="control-label">Stok</label>
                            <div class="input-group">
                                <input type="number" name="stok" id="stok" data-error="stok harus di isi" class="form-control" placeholder="Stok Produk" value="<?= $param->stok ?>" required>
                                <span class="input-group-addon">
                                    <span class="fa fa-sort-numeric-desc">
                                    </span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="control-label">Foto Produk 1</label>
                            <div class="input-group">
                                <input type="file" name="foto1" class="form-control">
                                <span class="input-group-addon">
                                    <span class="fa fa-photo">
                                    </span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="control-label">Foto Produk 2(Opsional)</label>
                            <div class="input-group">
                                <input type="file" name="foto2" class="form-control">
                                <span class="input-group-addon">
                                    <span class="fa fa-photo">
                                    </span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="control-label">Foto Produk 3(Opsional)</label>
                            <div class="input-group">
                                <input type="file" name="foto3" class="form-control">
                                <span class="input-group-addon">
                                    <span class="fa fa-photo">
                                    </span>
                                </span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
                            <a href="<?php echo base_url('Produk') ?>" class="btn btn-default ">Batal</a>
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
            if ($('#kategori').val() == null || $('#kategori').val() == 'Pilih') {
                alert("Pilih Kategori")
                e.preventDefault()

            }
        })
    })
</script>
</body>

</html>