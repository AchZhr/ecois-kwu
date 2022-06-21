<?php defined('BASEPATH') || exit('No direct script access allowed');

class Home extends CI_Controller
{
	protected $data = array();

	function __construct()
	{
		parent::__construct();
		$this->load->library('datatables');
		$this->load->model('produk_model');
		$this->load->model('mahasiswa_model');
	}

	function index()
	{

		$this->data['view']    = 'home';
		$this->data['param']    = $this->produk_model->getTopProduct();
		$this->load->view('template/default', $this->data);
	}

	function registrasi()
	{

		$this->data['view']    = 'registrasi';
		$this->data['param']    = '';
		$this->load->view('template/default', $this->data);
	}

	function regist()
	{

		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jk');
		$jurusan = $this->input->post('jurusan');
		$alamat = $this->input->post('alamat');
		$hp = $this->input->post('hp');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');


		if ($this->mahasiswa_model->insert($npm, $nama, $jk, $jurusan, $hp, $email, $alamat, $pass)) {
			redirect('front/login');
		} else {
			redirect('Home/registrasi');
		}
	}
}
