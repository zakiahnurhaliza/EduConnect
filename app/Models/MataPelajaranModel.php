<?php

namespace App\Models;

use CodeIgniter\Model;

class MataPelajaranModel extends Model
{
    protected $table = 'mata_pelajaran'; // Nama tabel
    protected $primaryKey = 'id'; // Kolom primary key
    protected $allowedFields = ['nama']; // Kolom yang dapat diubah/tulis

    // Jika perlu, kamu bisa menambahkan fungsi untuk mengambil semua mata pelajaran
    public function getAllMapel()
    {
        return $this->findAll();
    }
}
