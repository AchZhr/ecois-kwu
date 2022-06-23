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
}
