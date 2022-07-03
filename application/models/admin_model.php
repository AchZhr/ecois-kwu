<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends Data_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'vw_produk';
        $this->pkey = 'id_produk';
    }




    function produkCount()
    {
        $this->db->select('*');
        $this->db->from('produk');
        return $this->db->get()->num_rows();
    }

    function tokoCount()
    {
        $this->db->select('*');
        $this->db->from('toko');
        return $this->db->get()->num_rows();
    }
    function mhsCount()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        return $this->db->get()->num_rows();
    }

    function transaksiCount()
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
        return $this->db->get()->num_rows();
    }


    function getPengajuan()
    {
        $this->db->select('*');
        $this->db->from('vw_toko');
        $this->db->where('seller', '1');

        return $this->db->get()->result();
    }

    function getPengajuanByID($id)
    {
        $this->db->select('*');
        $this->db->from('vw_toko');
        $this->db->where('npm', $id);

        return $this->db->get()->row();
    }

    function getToko()
    {
        $this->db->select('*');
        $this->db->from('vw_toko');
        $this->db->where('seller', '2');


        return $this->db->get()->result();
    }

    function getMhs()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');

        return $this->db->get()->result();
    }

    function acc($id = '')
    {


        $sql = "UPDATE mahasiswa SET seller='2' WHERE npm='$id'";
        return $this->db->query($sql);
    }
}
