<?php

namespace App\Models;

use CodeIgniter\Model;

class HasilKuisModel extends Model
{
    protected $table = 'hasil_kuis';  // Nama tabel
    protected $primaryKey = 'id';     // Primary key
    protected $allowedFields = ['siswa_id', 'nama_siswa', 'kuis_id', 'skor']; // Sesuaikan dengan kolom yang ada di tabel

    // Fungsi untuk menyimpan hasil kuis
    public function simpanHasil($data)
    {
        return $this->insert($data);  // Menyimpan data hasil kuis ke tabel
    }
}
