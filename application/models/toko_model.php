<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class toko_model extends Data_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'toko';
        $this->pkey = 'id_toko';
    }


    function getToko($npm)
    {
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->where('npm', $npm);
        return $this->db->get()->row();
    }

    function getTokoByID($id)
    {
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->where('id_toko', $id);
        return $this->db->get()->row();
    }

    function transaksiCount($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->where('id_toko', $id);

        return $this->db->get()->num_rows();
    }
}
