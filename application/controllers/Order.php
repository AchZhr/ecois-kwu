<?php defined('BASEPATH') || exit('No direct script access allowed');

class Produk extends Data_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('produk_model');
    }

    function addReview()
    {

        if ($this->session->userdata('logged_in')) {
            if ($this->produk_model->insertReview($_POST)) {
                redirect('Katalog/detail/' . $_POST['id_produk']);
            } else {
                redirect('Home');
            }
        }
    }
}
