<?php
$this->data['param'] = $param;
$this->load->view('penjual/template/head.php');
$this->load->view('penjual/template/navbar.php');
$this->load->view('penjual/template/sidebar.php');
$this->load->view($view, $this->data);
