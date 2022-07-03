<?php defined('BASEPATH') || exit('No direct script access allowed');

class Toko extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('penjual_model');
        $this->load->model('produk_model');
        $this->load->model('toko_model');
    }


    function index()
    {

        // $data = $this->toko_model->getToko($this->session->userdata('npm'));


        // $this->data['view']    = 'penjual/Dasboard';
        // $this->data['param']    = $data;
        // $this->load->view('penjual/template/default', $this->data);
    }
}
