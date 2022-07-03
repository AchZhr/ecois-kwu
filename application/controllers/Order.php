<?php defined('BASEPATH') || exit('No direct script access allowed');

class Order extends Data_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('order_model');
        $this->load->model('produk_model');
    }

    function index()
    {

        if ($this->session->userdata('logged_in') && $this->session->userdata('seller') == 2) {

            $order = $this->order_model->getAllOrder($this->session->userdata('id_toko'));

            $this->data['view']    = 'penjual/list_order';
            $this->data['param']    = $order;
            $this->load->view('penjual/template/default', $this->data);
        } else {
            redirect('Home');
        }
    }

    function rekap()
    {

        if ($this->session->userdata('logged_in') && $this->session->userdata('seller') == 2) {

            $order = $this->order_model->getAllOrderAll($this->session->userdata('id_toko'));

            $this->data['view']    = 'penjual/rekap_order';
            $this->data['param']    = $order;
            $this->load->view('penjual/template/default', $this->data);
        } else {
            redirect('Home');
        }
    }




    function pesan()
    {

        if ($this->session->userdata('logged_in')) {

            $data['id_produk'] = $this->input->post('id_produk');
            $data['id_toko'] = $this->input->post('id_toko');
            $data['jumlah'] = $this->input->post('jumlah');

            $data['produk'] = $this->produk_model->getDataProduk($data['id_produk']);

            $data['total'] = (int)$data['produk']->harga_jual * (int)$data['jumlah'];

            $this->data['view']    = 'order';
            $this->data['param']    = $data;
            $this->load->view('template/default', $this->data);
        } else {
            redirect('Home');
        }
    }

    function insert()
    {

        if ($this->session->userdata('logged_in')) {

            $data['id_produk'] = $this->input->post('id_produk');
            $data['id_toko'] = $this->input->post('id_toko');
            $data['jumlah'] = $this->input->post('jumlah');
            $data['total'] = $this->input->post('total');
            $data['keterangan'] = $this->input->post('keterangan');

            if ($data['keterangan'] == '') {
                $data['keterangan'] = '-';
            }

            $insert = $this->order_model->insert($data['id_produk'], $data['id_toko'], $data['jumlah'], $data['total'], $data['keterangan']);


            if ($insert != '') {
                redirect('User/detailOrder/' . $insert);
            } else {
                redirect('Home');
            }
        } else {
            redirect('Home');
        }
    }

    function detailOrder()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata('seller') == 2) {

            $id = $this->uri->segment(3);
            $data = $this->order_model->getOrder($id);
            $this->data['view']  = 'penjual/detail_order';
            $this->data['param']  = $data;
            $this->load->view('penjual/template/default', $this->data);
        } else {
            redirect('Home');
        }
    }

    function dibayar()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata('seller') == 2) {

            $id = $this->uri->segment(3);
            $this->order_model->dibayar($id);
            redirect('Order');
        } else {
            redirect('Home');
        }
    }


    function selesai()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata('seller') == 2) {

            $id = $this->uri->segment(3);
            $this->order_model->selesai($id);
            redirect('Order');
        } else {
            redirect('Home');
        }
    }
}
