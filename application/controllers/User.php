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
<<<<<<< HEAD
 
    function edit()
    {
		$this->data['view']    = 'edit';
		$this->data['param']    = $this->mahasiswa_model->getMhsData();
		$this->load->view('template/default', $this->data);
	}

    Function edit_data()
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
    
=======

    function daftarPenjual()
    {
        if (isset($_POST["submit"])) {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'png|jpg|jpeg';
            $config['overwrite'] = TRUE;
            $config['remove_space'] = TRUE;
            $config['encrypt_name'] = TRUE;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('message', $this->upload->display_errors());
                redirect($_SERVER['HTTP_REFERER']);
                return false;
            } else {
                $id = $this->input->post('id_penjual');
                $image = $this->input->post('image');
                $npm = $this->input->post('npm_penjual');
                $data = array(
                    'image' => $image,
                    'npm_penjual' => $npm,
                );
                $this->daftar_penjual->post($image, $npm);
                $this->session->set_flashdata('message', 'Penjual Berhasil Ditambahkan');
                redirect('');
            }
        } else {
            
        }
        
    }
>>>>>>> b94318db40809d89ebd8fa7f94c8cef757623813
}
