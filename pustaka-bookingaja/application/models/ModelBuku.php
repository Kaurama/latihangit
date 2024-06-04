<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBuku extends CI_Model
{
    // Manajemen buku

    // Mendapatkan semua data buku
    public function getBuku()
    {
        return $this->db->get('buku');
    }

    // Mendapatkan data buku berdasarkan kondisi tertentu
    public function bukuWhere($where)
    {
        return $this->db->get_where('buku', $where);
    }

    // Menyimpan data buku ke dalam tabel 'buku'
    public function simpanBuku($data = null)
    {
        $this->db->insert('buku', $data);
    }

    // Mengupdate data buku berdasarkan kondisi tertentu
    public function updateBuku($data = null, $where = null)
    {
        $this->db->update('buku', $data, $where);
    }

    // Menghapus data buku berdasarkan kondisi tertentu
    public function hapusBuku($where = null)
    {
        $this->db->delete('buku', $where);
    }

    // Menghitung total dari suatu field pada tabel 'buku' berdasarkan kondisi tertentu
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('buku');
        return $this->db->get()->row($field);
    }

    // Manajemen kategori

    // Mendapatkan semua data kategori
    public function getKategori()
    {
        return $this->db->get('kategori');
    }

    // Mendapatkan data kategori berdasarkan kondisi tertentu
    public function kategoriWhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }

    // Menyimpan data kategori ke dalam tabel 'kategori'
    public function simpanKategori($data = null)
    {
        $this->db->insert('kategori', $data);
    }

    // Menghapus data kategori berdasarkan kondisi tertentu
    public function hapusKategori($where = null)
    {
        $this->db->delete('kategori', $where);
    }

    // Mengupdate data kategori berdasarkan kondisi tertentu
    public function updateKategori($where = null, $data = null)
    {
        $this->db->update('kategori', $data, $where);
    }

    // Join antara tabel 'buku' dan 'kategori' berdasarkan kondisi tertentu
    public function joinKategoriBuku($where)
    {
        $this->db->select('buku.id_kategori, kategori.kategori');
        $this->db->from('buku');
        $this->db->join('kategori', 'kategori.id = buku.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }
}
