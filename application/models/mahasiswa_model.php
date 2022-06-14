<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class mahasiswa_model extends Data_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'mahasiswa';
        $this->pkey = 'npm';
        $this->load->library('hash');
    }

    function insert($npm = '', $nama = '', $jk = '', $jurusan = '', $nohp = '', $email = '', $alamat, $password = '')
    {
        $pass = $this->hash->ecryptPassword($password);
        $sql = "INSERT INTO mahasiswa VALUES('$npm','$nama','$jk','$jurusan','$nohp','$email','$alamat','0','1','$pass')";
        return $this->db->query($sql);
    }

    function getMhsData()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where('npm', $this->session->userdata('npm'));
        return $this->db->get()->row();
    }
}
