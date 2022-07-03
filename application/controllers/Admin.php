<?php defined('BASEPATH') || exit('No direct script access allowed');

class Admin extends Data_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

    function index()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata('status_akun') == 9) {




            $box = [
                [
                    'box'         => 'light-blue',
                    'total'     => $this->admin_model->tokoCount(),
                    'title'        => 'Total Usaha',
                    'icon'        => 'cubes'
                ],
                [
                    'box'         => 'olive',
                    'total'     => $this->admin_model->produkCount(),
                    'title'        => 'Total Produk',
                    'icon'        => 'list'
                ],
                [
                    'box'         => 'red',
                    'total'     => $this->admin_model->transaksiCount(),
                    'title'        => 'Total Transaksi',
                    'icon'        => 'list'
                ],
                [
                    'box'         => 'green',
                    'total'     => $this->admin_model->mhsCount(),
                    'title'        => 'Total User',
                    'icon'        => 'list'
                ]
            ];
            $data['box'] = json_decode(json_encode($box), FALSE);

            $this->data['view']    = 'admin/dashboard';
            $this->data['param']    = $data;
            $this->load->view('admin/template/default', $this->data);
        } else {
            redirect('Home');
        }
    }

    function pengajuan()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata('status_akun') == 9) {

            $data = $this->admin_model->getPengajuan();

            $this->data['view']    = 'admin/pengajuan';
            $this->data['param']    = $data;
            $this->load->view('admin/template/default', $this->data);
        } else {
            redirect('Home');
        }
    }

    function detail()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata('status_akun') == 9) {


            $id = $this->uri->segment(3);
            $data = $this->admin_model->getPengajuanByID($id);

            $this->data['view']    = 'admin/detail_pengajuan';
            $this->data['param']    = $data;
            $this->load->view('admin/template/default', $this->data);
        } else {
            redirect('Home');
        }
    }

    function usaha()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata('status_akun') == 9) {

            $data = $this->admin_model->getToko();

            $this->data['view']    = 'admin/usaha';
            $this->data['param']    = $data;
            $this->load->view('admin/template/default', $this->data);
        } else {
            redirect('Home');
        }
    }

    function user()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata('status_akun') == 9) {

            $data = $this->admin_model->getMhs();

            $this->data['view']    = 'admin/user';
            $this->data['param']    = $data;
            $this->load->view('admin/template/default', $this->data);
        } else {
            redirect('Home');
        }
    }

    function verifikasi()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata('status_akun') == 9) {

            $id = $this->uri->segment(3);
            $this->admin_model->acc($id);
            redirect('Admin/pengajuan');
        } else {
            redirect('Home');
        }
    }
}
