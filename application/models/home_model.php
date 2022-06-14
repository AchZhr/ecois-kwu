<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class home_model extends Data_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'produk';
        $this->pkey = 'id_produk';
    }

    function getTopProduct()
    {
        $this->db->select('*');
        $this->db->from('produk');
        return $this->db->get()->result();
    }
}
