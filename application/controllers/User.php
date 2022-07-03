<?php defined('BASEPATH') || exit('No direct script access allowed');

class User extends Data_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->model('penjual_model');
        $this->load->model('order_model');
    }

    function index()
    {
        $this->data['view']    = 'profile';
        $this->data['param']    = $this->mahasiswa_model->getMhsData();
        $this->load->view('template/default', $this->data);
    }

    function registrasiPenjual()
    {
        $data['mhs'] = $this->mahasiswa_model->getMhsData();
        $data['toko'] = '';

        if ($data['mhs']->seller == 2) {
            $data['toko'] = $this->penjual_model->getTokoData();
        }


        $this->data['view']    = 'registrasiPenjual';
        $this->data['param']    = $data;
        $this->load->view('template/default', $this->data);
    }

    function daftarPenjual()
    {

        if (isset($_POST["submit"])) {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'png|jpg|jpeg';
            $config['overwrite'] = TRUE;
            $config['remove_space'] = TRUE;
            $config['encrypt_name'] = TRUE;
            $this->upload->initialize($config);

            $ktm = '';
            $usaha = '';

            if (!$this->upload->do_upload('foto')) {
                // echo $this->upload->display_errors();
                $this->session->set_flashdata('message', $this->upload->display_errors());
                redirect($_SERVER['HTTP_REFERER']);
                return false;
            } else {
                $ktm =  $this->upload->data('file_name');
            }

            if (!$this->upload->do_upload('usaha')) {
                // echo $this->upload->display_errors();
                $this->session->set_flashdata('message', $this->upload->display_errors());
                redirect($_SERVER['HTTP_REFERER']);
                return false;
            } else {
                $usaha =  $this->upload->data('file_name');
            }

            // var_dump($this->upload->data());
            $npm = $this->input->post('npm');
            $nama = $this->input->post('nama');
            $ig = $this->input->post('ig');
            $fb = $this->input->post('fb');
            $lokasi = $this->input->post('lokasi');
            $kategori = $this->input->post('kategori');
            $wa = $this->input->post('wa');



            $this->penjual_model->insert($npm, $nama, $kategori, $lokasi, $ig, $fb, $wa, $usaha, $ktm);
            $this->mahasiswa_model->sellerStatus($npm, '1');

            $this->session->set_userdata('seller', '1');

            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    function edit()
    {
        $this->data['view']    = 'edit';
        $this->data['param']    = $this->mahasiswa_model->getMhsData();
        $this->load->view('template/default', $this->data);
    }

    function myorder()
    {
        $data['mhs'] = $this->mahasiswa_model->getMhsData();
        $data['order'] = $this->order_model->getOrderMhs();
        // var_dump($data['order']);
        $this->data['view']    = 'order_saya';
        $this->data['param']    = $data;
        $this->load->view('template/default', $this->data);
    }

    function detailOrder()
    {
        $id = $this->uri->segment(3);
        $data['mhs'] = $this->mahasiswa_model->getMhsData();
        $data['order'] = $this->order_model->getOrder($id);
        $this->data['view']    = 'detail_order';
        $this->data['param']    = $data;
        $this->load->view('template/default', $this->data);
    }


    function edit_data()
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
