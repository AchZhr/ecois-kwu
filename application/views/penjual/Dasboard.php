<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
    </section>
    <!-- Main content -->

    <section class="content">

        <div class="row">
            <?php foreach ($param['box'] as $info_box) : ?>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-<?= $info_box->box ?>">
                        <div class="inner">
                            <h3 class="count"><?= $info_box->total; ?></h3>
                            <p><?= $info_box->title; ?></p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-<?= $info_box->icon ?>"></i>
                        </div>
                        <a href="<?= base_url() . strtolower($info_box->link); ?>" class="small-box-footer">
                            More info
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
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

    });
</script>
</body>

</html>