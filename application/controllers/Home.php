<?php defined('BASEPATH') || exit('No direct script access allowed');

class Home extends CI_Controller
{
	protected $data = array();

	function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');
		$this->load->model('home_model');
	}

	function index()
	{
		$this->data['view']    = 'home';
		$this->data['param']    = '';
		$this->load->view('template/default', $this->data);
	}
}
