<?php defined('BASEPATH') || exit('No direct script access allowed');

class User extends Data_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
    }

    function index()
    {
        $this->data['view']    = 'profile';
        $this->data['param']    = $this->mahasiswa_model->getMhsData();
        $this->load->view('template/default', $this->data);
    }

    function registrasiPenjual()
    {
        $this->data['view']    = 'registrasiPenjual';
        $this->data['param']    = $this->mahasiswa_model->getMhsData();
        $this->load->view('template/default', $this->data);
    }
 
    function edit()
    {
		$this->data['view']    = 'edit';
		$this->data['param']    = $this->mahasiswa_model->getMhsData();
		$this->load->view('template/default', $this->data);
	}

    Function edit_data()
    {
        $npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jk');
		$jurusan = $this->input->post('jurusan');
		$hp = $this->input->post('hp');
		$email = $this->input->post('email');
        $alamat = $this->input->post('alamat');


		if ($this->mahasiswa_model->update($npm, $nama, $jk, $jurusan, $hp, $email, $alamat)) {
			redirect('User/index');
		} else {
			redirect('User/edit');
		}
	}
    
}
