<?php defined('BASEPATH') || exit('No direct script access allowed');

class Penjual extends Data_Controller
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
        if ($this->session->userdata('logged_in') && $this->session->userdata('seller') == 2) {

            $toko = $this->toko_model->getToko($this->session->userdata('npm'));
            $this->session->set_userdata('id_toko', $toko->id_toko);


            $box = [
                [
                    'box'         => 'light-blue',
                    'total'     => $this->produk_model->getTotalProduk($toko->id_toko),
                    'title'        => 'Total Produk',
                    'link'    => 'Barang',
                    'icon'        => 'cubes'
                ],
                [
                    'box'         => 'olive',
                    'total'     => 10,
                    'title'        => 'Order',
                    'link'    => 'kategori',
                    'icon'        => 'list'
                ]
            ];
            $data['box'] = json_decode(json_encode($box), FALSE);

            $this->data['view']    = 'penjual/Dasboard';
            $this->data['param']    = $data;
            $this->load->view('penjual/template/default', $this->data);
        } else {
            redirect('Home');
        }
    }
}
