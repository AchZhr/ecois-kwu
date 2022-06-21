<?php defined('BASEPATH') || exit('No direct script access allowed');

class Katalog extends CI_Controller
{
    protected $data = array();

    function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
        $this->load->model('produk_model');
    }

    function index()
    {
        $key = 'All';
        $jumlah_data = $this->produk_model->getJumlahData($key);
        $this->load->library('pagination');
        $config['base_url'] = base_url() . '/Katalog/index';
        $config['per_page'] = 12;
        $config['total_rows'] = $jumlah_data;
        $config['num_tag_open'] = '<li>';

        $config['num_tag_close'] = '</li>';


        $config['cur_tag_open'] = '<li class="is-active"><a>';
        $config['cur_tag_close'] = '</a></li>';


        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $this->data['view']    = 'katalog';
        $this->data['param']    = $this->produk_model->getAllProduct($key, $config['per_page'], $from);;
        $this->load->view('template/default', $this->data);
    }

    function detail()
    {
        $this->data['view']    = 'detail_produk';
        $this->data['param']    = '';
        $this->load->view('template/default', $this->data);
    }
}
