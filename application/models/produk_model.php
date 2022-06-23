<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class produk_model extends Data_Model
{

    function __construct()
    {
        parent::__construct();
        $this->table_name = 'vw_produk';
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
        $this->db->limit(8);
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
            $this->db->or_like('nama_produk', $key);
            $this->db->or_like('kategori', $key);
            $this->db->or_like('deskripsi', $key);
            $this->db->or_like('nama_toko', $key);
        }


        return $this->db->get()->num_rows();
    }

    function getDataProduk($id)
    {
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->where($this->pkey, $id);

        return $this->db->get()->row();
    }

    function getReviewProduct($id)
    {
        $this->db->select('*');
        $this->db->from('vw_review');
        $this->db->where($this->pkey, $id);
        // $this->db->limit(5);
        return $this->db->get()->result();
    }

    function getRating($id)
    {
        $this->db->select('AVG(rating) rating');
        $this->db->from('rating');
        $this->db->where($this->pkey, $id);

        return round($this->db->get()->row()->rating);
    }

    function getDataAutoComplete($key)
    {

        $this->db->select('nama_produk');
        $this->db->from($this->table_name);
        $this->db->like('nama_produk', $key);
        $this->db->or_like('kategori', $key);
        $this->db->or_like('deskripsi', $key);
        $this->db->or_like('nama_toko', $key);

        return $this->db->get()->result();
    }

    function insertReview($_Data)
    {
        $dt = array(
            'npm' => $this->session->userdata('npm'),
            'id_produk' => $_Data['id_produk'],
            'rating'      => $_Data['rating'],
            'komentar'          => $_Data['komentar']
        );

        if ($this->db->insert('rating', $dt)) {
            return true;
        } else {
            return false;
        }
    }
}
