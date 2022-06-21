<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class produk_model extends Data_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'vw_product';
        $this->pkey = 'id_produk';
    }

    function getAllProduct($key, $limit, $start)
    {
        if ($key == 'All') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else if ($key == 'Makanan') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Makanan');
            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else if ($key == 'Barang') {

            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Barang');
            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else if ($key == 'Other') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Lain-lain');
            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->like('id_produk', $key);
            $this->db->or_like('id_produk', $key);
            $this->db->or_like('nama_produk', $key);
            $this->db->or_like('kategori', $key);
            $this->db->or_like('deskripsi', $key);
            $this->db->or_like('nama_toko', $key);
            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        }

        return $this->db->get()->result();
    }

    function getTopProduct()
    {
        $this->db->select('*');
        $this->db->from($this->table_name);
        return $this->db->get()->result();
    }


    function getJumlahData($key)
    {
        if ($key == 'All') {
            $this->db->select('*');
            $this->db->from($this->table_name);
        } else if ($key == 'Makanan') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Makanan');
        } else if ($key == 'Barang') {

            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Barang');
        } else if ($key == 'Other') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Lain-lain');
        } else {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->like('id_produk', $key);
            $this->db->or_like('id_produk', $key);
            $this->db->or_like('nama_produk', $key);
            $this->db->or_like('kategori', $key);
            $this->db->or_like('deskripsi', $key);
            $this->db->or_like('nama_toko', $key);
        }


        return $this->db->get()->num_rows();
    }
}
