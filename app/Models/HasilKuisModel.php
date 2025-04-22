<?php

namespace App\Models;

use CodeIgniter\Model;

class HasilKuisModel extends Model
{
    protected $table = 'hasil_kuis';
    protected $primaryKey = 'id';
    protected $allowedFields = ['siswa_id', 'nama_siswa', 'kuis_id', 'skor'];

    // Optional: tambahkan validation
    protected $validationRules = [
        'siswa_id'    => 'required|integer',
        'nama_siswa'  => 'required|string',
        'kuis_id'     => 'required|integer',
        'skor'        => 'required|integer',
    ];

    public function simpanHasil($data)
    {
        return $this->insert($data);
    }
}
