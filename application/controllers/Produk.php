<?php defined('BASEPATH') || exit('No direct script access allowed');

class Produk extends Data_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('produk_model');
    }

    function index()
    {

        if ($this->session->userdata('logged_in') && $this->session->userdata('seller') == 2) {

            $produk = $this->produk_model->getProdukToko($this->session->userdata('id_toko'));

            $this->data['view']    = 'penjual/list_barang';
            $this->data['param']    = $produk;
            $this->load->view('penjual/template/default', $this->data);
        } else {
            redirect('Home');
        }
    }

    function tambahProduk()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata('seller') == 2) {
            $this->data['view']    = 'penjual/add_produk';
            $this->data['param']    = '';
            $this->load->view('penjual/template/default', $this->data);
        } else {
            redirect('Home');
        }
    }

    function edit()
    {
        if ($this->session->userdata('logged_in') && $this->session->userdata('seller') == 2) {
            $id = $this->uri->segment(3);
            $this->data['view']    = 'penjual/edit_produk';
            $this->data['param']    = $this->produk_model->getProduk($id);
            $this->load->view('penjual/template/default', $this->data);
        } else {
            redirect('Home');
        }
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

    function post()
    {

        if ($this->session->userdata('logged_in')) {
            if ($this->produk_model->insertReview($_POST)) {
                redirect('Katalog/detail/' . $_POST['id_produk']);
            } else {
                redirect('Home');
            }
        }
    }

    function hapus()
    {

        if ($this->session->userdata('logged_in') && $this->session->userdata('seller') == 2) {
            $id = $this->uri->segment(3);

            if ($this->produk_model->delete($id)) {
                redirect('Produk/index');
            } else {
                redirect('Home');
            }
        }
    }

    function insert()
    {



        if ($this->session->userdata('logged_in') && $this->session->userdata('seller') == 2) {
            if (isset($_POST["submit"])) {
                $config['upload_path'] = './uploads/produk';
                $config['allowed_types'] = 'png|jpg|jpeg';
                $config['overwrite'] = TRUE;
                $config['remove_space'] = TRUE;
                $config['encrypt_name'] = TRUE;
                $this->upload->initialize($config);

                $foto1 = '';
                $foto2 = '';
                $foto3 = '';

                if (!$this->upload->do_upload('foto1')) {
                    // echo $this->upload->display_errors();
                    $this->session->set_flashdata('message', $this->upload->display_errors());
                    redirect($_SERVER['HTTP_REFERER']);
                    return false;
                } else {
                    $foto1 =  $this->upload->data('file_name');
                }

                if ($this->upload->do_upload('foto2')) {
                    $foto2 =  $this->upload->data('file_name');
                } else {
                    $foto2 = '';
                }

                if ($this->upload->do_upload('foto3')) {
                    $foto3 =  $this->upload->data('file_name');
                } else {
                    $foto3 = '';
                }

                // var_dump($this->upload->data());
                $nama = $this->input->post('nama');
                $kategori = $this->input->post('kategori');
                $deskripsi = $this->input->post('deskripsi');
                $harga = $this->input->post('harga');
                $diskon = $this->input->post('diskon');
                $stok = $this->input->post('stok');

                if ($deskripsi == '') {
                    $deskripsi = '-';
                }
                $harga_jual = 0;

                if ($diskon == 0) {
                    $harga_jual = $harga;
                } else {
                    $harga_jual = ($diskon / 100) * $harga;
                }

                $image = '';


                if ($foto2 == '' && $foto3 == '') {
                    $image = '{"foto":["' . $foto1 . '"]}';
                } elseif ($foto2 != '' && $foto3 == '') {
                    $image = '{"foto":["' . $foto1 . '","' . $foto2 . '"]}';
                } elseif ($foto2 == '' && $foto3 != '') {
                    $image = '{"foto":["' . $foto1 . '","' . $foto3 . '"]}';
                } else {
                    $image = '{"foto":["' . $foto1 . '","' . $foto2 . '","' . $foto3 . '"]}';
                }








                if ($this->produk_model->insert($nama, $kategori, $deskripsi, $harga, $diskon, $harga_jual, $image, $stok)) {
                    redirect('Produk/index');
                } else {
                    redirect('Home');
                }
            }
        }
    }


    function update()
    {



        if ($this->session->userdata('logged_in') && $this->session->userdata('seller') == 2) {
            if (isset($_POST["submit"])) {
                $config['upload_path'] = './uploads/produk';
                $config['allowed_types'] = 'png|jpg|jpeg';
                $config['overwrite'] = TRUE;
                $config['remove_space'] = TRUE;
                $config['encrypt_name'] = TRUE;
                $this->upload->initialize($config);

                $foto1 = '';
                $foto2 = '';
                $foto3 = '';

                if ($this->upload->do_upload('foto1')) {
                    $foto1 =  $this->upload->data('file_name');
                } else {
                    $foto1 = '';
                }


                if ($this->upload->do_upload('foto2')) {
                    $foto2 =  $this->upload->data('file_name');
                } else {
                    $foto2 = '';
                }

                if ($this->upload->do_upload('foto3')) {
                    $foto3 =  $this->upload->data('file_name');
                } else {
                    $foto3 = '';
                }

                // var_dump($this->upload->data());
                $id = $this->input->post('id');
                $foto = $this->input->post('image');

                $nama = $this->input->post('nama');
                $kategori = $this->input->post('kategori');
                $deskripsi = $this->input->post('deskripsi');
                $harga = $this->input->post('harga');
                $diskon = $this->input->post('diskon');
                $stok = $this->input->post('stok');

                if ($deskripsi == '') {
                    $deskripsi = '-';
                }
                $harga_jual = 0;

                if ($diskon == 0) {
                    $harga_jual = $harga;
                } else {
                    $harga_jual = ($diskon / 100) * $harga;
                }

                $image = '';


                if ($foto2 == '' && $foto3 == '' && $foto1 == '') {
                    $image = $foto;
                } elseif ($foto2 == '' && $foto3 == '' && $foto1 != '') {
                    $image = '{"foto":["' . $foto1 . '"]}';
                } elseif ($foto2 != '' && $foto3 == '' && $foto1 != '') {
                    $image = '{"foto":["' . $foto1 . '","' . $foto2 . '"]}';
                } elseif ($foto2 == '' && $foto3 != '' && $foto1 != '') {
                    $image = '{"foto":["' . $foto1 . '","' . $foto3 . '"]}';
                } elseif ($foto2 != '' && $foto3 != '' && $foto1 == '') {
                    $image = '{"foto":["' . $foto2 . '","' . $foto3 . '"]}';
                } else {
                    $image = '{"foto":["' . $foto1 . '","' . $foto2 . '","' . $foto3 . '"]}';
                }








                if ($this->produk_model->update($id, $nama, $kategori, $deskripsi, $harga, $diskon, $harga_jual, $image, $stok)) {
                    redirect('Produk/index');
                } else {
                    redirect('Home');
                }
            }
        }
    }
}
