<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class penjual_model extends Data_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'toko';
        $this->pkey = 'id_toko';
        $this->load->library('hash');
    }

    function getRamndom($n)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

    function getTokoData()
    {
        $this->db->select('*');
        $this->db->from('toko');
        $this->db->where('npm', $this->session->userdata('npm'));
        return $this->db->get()->row();
    }

    function insert($npm = '', $nama = '', $kategori = '', $lokasi = '', $ig = '', $fb = '', $wa = '', $usaha = '', $ktm = '')
    {
        $id = 'T' . $npm . $this->getRamndom(6);
        if ($ig == '') {
            $ig = '-';
        } else if ($fb == '') {
            $fb = '-';
        }
        $sql = "INSERT INTO toko(id_toko,npm,nama_toko,kategori,lokasi,instagram,fb,wa,foto_usaha,ktm) VALUES('$id','$npm','$nama','$kategori','$lokasi','$ig','$fb','$wa','$usaha','$ktm')";
        return $this->db->query($sql);
    }
}
