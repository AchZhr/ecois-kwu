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
        $key = $this->uri->segment(3);
        if ($key == 'search' && $this->input->post('cari') != null) {
            $key = $this->input->post('cari');
        }
        $jumlah_data = $this->produk_model->getJumlahData($key);
        $this->load->library('pagination');
        $config['base_url'] = base_url() . '/Katalog/index/' . $key;
        $config['per_page'] = 12;
        $config['total_rows'] = $jumlah_data;
        $config['num_tag_open'] = '<li>';

        $config['num_tag_close'] = '</li>';


        $config['cur_tag_open'] = '<li class="is-active"><a>';
        $config['cur_tag_close'] = '</a></li>';


        $from = $this->uri->segment(4);
        $this->pagination->initialize($config);
        $this->data['view']    = 'katalog';
        $this->data['param']    = $this->produk_model->getAllProduct($key, $config['per_page'], $from);;
        $this->load->view('template/default', $this->data);
    }

    function detail()
    {
        $id = '';

        if ($this->uri->segment(3) != '') {
            $id = $this->uri->segment(3);
        }

        $produk = array();

        $review = $this->produk_model->getReviewProduct($id);

        $produk['data'] = $this->produk_model->getDataProduk($id);
        $produk['review'] = $review;
        $produk['rating'] = $this->produk_model->getRating($id);

        $produk['jumlahReview'] = count($review);

        $this->data['view']    = 'detail_produk';
        $this->data['param']    = $produk;
        $this->load->view('template/default', $this->data);
    }

    function autocomplete()
    {

        if ($this->input->post('search') != null) {
            $key = $this->input->post('search');
            $response = array();

            foreach ($this->produk_model->getDataAutoComplete($key) as $row) {
                $response[] = array("value" => $row->nama_produk, "label" => $row->nama_produk);
            }

            $res = array_map("unserialize", array_unique(array_map("serialize", $response)));

            echo json_encode($res);
        }
    }
}
