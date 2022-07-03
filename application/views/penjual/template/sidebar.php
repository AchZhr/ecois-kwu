	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="<?php echo base_url('assets/admin/dist/img/user.png') ?>" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p> <?php echo $this->session->userdata['nama']; ?> </p>
					<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>
			<!-- /.search form -->
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">MENU</li>
				<li>
					<a href="<?php echo base_url('Penjual') ?>">
						<i class="fa fa-dashboard"></i> <span>DASHBOARD</span>
						<span class="pull-right-container">
						</span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('Produk') ?>">
						<i class="fa fa-inbox"></i> <span>Produk</span>
						<span class="pull-right-container">
						</span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('Order') ?>">
						<i class="fa fa-shopping-cart"></i> <span>Order</span>
						<span class="pull-right-container">
						</span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('Order/rekap') ?>">
						<i class="fa  fa-file-text-o"></i> <span>Rekap Order</span>
						<span class="pull-right-container">
						</span>
					</a>
				</li>



			</ul>

		</section>
		<!-- /.sidebar -->
	</aside>