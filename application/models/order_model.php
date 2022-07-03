<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class order_model extends Data_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'tbl_order';
        $this->pkey = 'orderid';
    }

    function getAllOrder($id_toko)
    {
        $this->db->select('*');
        $this->db->from('vw_order');
        $this->db->where('id_toko', $id_toko);
        $this->db->where('status !=', '2');

        return $this->db->get()->result();
    }

    function getAllOrderAll($id_toko)
    {
        $this->db->select('*');
        $this->db->from('vw_order');
        $this->db->where('id_toko', $id_toko);

        return $this->db->get()->result();
    }

    function getOrderMhs()
    {
        $this->db->select('*');
        $this->db->from('vw_order');
        $this->db->where('npm', $this->session->userdata('npm'));
        $this->db->order_by("tgl_order", "desc");

        return $this->db->get()->result();
    }

    function getOrder($id)
    {
        $this->db->select('*');
        $this->db->from('vw_order');
        $this->db->where('orderid', $id);
        return $this->db->get()->row();
    }

    function getTotalOrderMhs()
    {
        $this->db->select('*');
        $this->db->from('vw_order');
        $this->db->where('npm', $this->session->userdata('npm'));

        return $this->db->get()->num_rows();
    }

    function insert($id_produk = '', $id_toko = '', $jumlah = '', $total = '', $keterangan = '')
    {
        $npm = $this->session->userdata('npm');

        $id = 'O' . $npm . date('Y') . date('m') . str_pad($this->getTotalOrderMhs($npm) + 1, 6, "0", STR_PAD_LEFT);

        $sql = "INSERT INTO tbl_order(orderid,id_produk,id_toko,npm,jumlah,total,keterangan) VALUES('$id','$id_produk','$id_toko','$npm','$jumlah','$total','$keterangan')";


        if ($this->db->query($sql)) {
            return $id;
        } else {
            return '';
        }
    }

    function dibayar($orderid)
    {

        $sql = "UPDATE tbl_order set status='1' where orderid='$orderid'";


        return $this->db->query($sql);
    }

    function selesai($orderid)
    {

        $sql = "UPDATE tbl_order set status='2' where orderid='$orderid'";


        return $this->db->query($sql);
    }
}
