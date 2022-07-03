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
        } else if ($key == 'FNA') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Fashion & Aksesoris');
            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else if ($key == 'Sepatu') {

            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Sepatu');

            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else if ($key == 'Pakaian') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Pakaian');

            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else if ($key == 'FNB') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Food & Beverage');

            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else if ($key == 'PK') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Produk Kecantikan');

            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else if ($key == 'HNA') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Handphone & Aksesoris');

            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else if ($key == 'NHK') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Hobi & Koleksi');

            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else if ($key == 'AK') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Alat Kesehatan');

            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else if ($key == 'KNA') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Komputer & Aksesoris');

            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else if ($key == 'ONO') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Olahraga & Outdoor');

            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else if ($key == 'Otomotif') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Otomotif');

            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else if ($key == 'BNAT') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Buku & ALat Tulis');

            if ($limit > 0) {
                $this->db->limit($limit, $start);
            }
        } else if ($key == 'JNL') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Jasa & Layanan');

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

    function getTotalProduk($id_toko)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('id_toko', $id_toko);
        return $this->db->get()->num_rows();
    }

    function getProdukToko($id_toko)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('id_toko', $id_toko);
        return $this->db->get()->result();
    }

    function getProduk($id)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('id_produk', $id);
        return $this->db->get()->row();
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
        } else if ($key == 'FNA') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Fashion & Aksesoris');
        } else if ($key == 'Sepatu') {

            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Sepatu');
        } else if ($key == 'Pakaian') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Pakaian');
        } else if ($key == 'FNB') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Food & Beverage');
        } else if ($key == 'PK') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Produk Kecantikan');
        } else if ($key == 'HNA') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Handphone & Aksesoris');
        } else if ($key == 'NHK') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Hobi & Koleksi');
        } else if ($key == 'AK') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Alat Kesehatan');
        } else if ($key == 'KNA') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Komputer & Aksesoris');
        } else if ($key == 'ONO') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Olahraga & Outdoor');
        } else if ($key == 'Otomotif') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Otomotif');
        } else if ($key == 'BNAT') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Buku & ALat Tulis');
        } else if ($key == 'JNL') {
            $this->db->select('*');
            $this->db->from($this->table_name);
            $this->db->where('kategori', 'Jasa & Layanan');
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

    function insert($nama = '', $kategori = '', $deskripsi = '', $harga = '', $diskon = '', $harga_jual = '', $image = '', $stok = '')
    {
        $id_toko = $this->session->userdata('id_toko');

        $id = 'P' . $id_toko . str_pad($this->getTotalProduk($id_toko) + 1, 4, "0", STR_PAD_LEFT);



        $sql = "INSERT INTO produk(id_produk,nama_produk,kategori,deskripsi,harga,diskon,harga_jual,image,stok,id_toko) VALUES('$id','$nama','$kategori','$deskripsi','$harga','$diskon','$harga_jual','$image','$stok','$id_toko')";
        return $this->db->query($sql);
    }

    function update($id = '', $nama = '', $kategori = '', $deskripsi = '', $harga = '', $diskon = '', $harga_jual = '', $image = '', $stok = '')
    {
        $sql = "UPDATE produk SET nama_produk='$nama',kategori='$kategori',deskripsi='$deskripsi',harga='$harga',diskon='$diskon',harga_jual='$harga_jual',image='$image',stok=$stok WHERE id_produk='$id'";
        return $this->db->query($sql);
    }

    function produkOrderCount($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->where('id_produk', $id);
        return $this->db->get()->num_rows();
    }


    function delete($id = '')
    {

        if ($this->produkOrderCount($id) == 0) {
            $sql = "DELETE FROM produk  WHERE id_produk='$id'";
        } else {
            $sql = "UPDATE produk SET status='0' WHERE id_produk='$id'";
        }
        return $this->db->query($sql);
    }
}
