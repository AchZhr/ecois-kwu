<?php
$this->data['param'] = $param;
$this->load->view('admin/template/head.php');
$this->load->view('admin/template/navbar.php');
$this->load->view('admin/template/sidebar.php');
$this->load->view($view, $this->data);
